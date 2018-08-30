<?php

namespace App\Http\Controllers;

use App\Festival;
use App\Rules\Recaptcha;
use App\Vote;
use Illuminate\Http\Request;

class VotingController extends Controller
{
    /**
     * Post the festival award vote data.
     *
     * @param Request $request
     * @param Festival $festival
     * @return \Illuminate\Http\RedirectResponse
     */
    public function vote(Request $request, Festival $festival)
    {
        if ($festival->passed == false) {
            $request->validate([
                'g-recaptcha-response' => [
                    'required',
                    new Recaptcha(),
                ],
                'name' => 'required|string|min:1|max:30',
                'code' => [
                    'required',
                    'string',
                    'min:2',
                    'max:2',
                    'regex:/(17)|(25)|(29)|(33)|(44)/',
                ],
                'phone' => 'required|string|min:7|max:7|regex:/[0-9]{7}/',
                'email' => 'required|string|email|min:3|max:255',
                'award_id' => 'required|array|min:1|max:' . $festival->award_nominations,
                'award_id.*' => 'string|min:1|max:1'
                /*Rule::unique('votes', 'award_id')->where(function ($query) use ($request) {
                    if (isset($request->user()->id)) {
                        return $query->where('user_id', $request->user()->id);
                    }

                    return $query->where('email', $request->email)
                        ->orWhere('phone', '375' . $request->code . $request->phone);
                }),*/
                ,
            ]);

            if (isset($request->user()->id)) {
                foreach ($request->award_id as $award => $nominee) {
                    if (($award > 0) && ($award <= $festival->award_nominations)) {
                        $request->user()->votings()->updateOrCreate(
                            ['award_id' => $award,],
                            ['award_nominee' => $nominee,]
                        );
                    }
                }
            } else {
                foreach ($request->award_id as $award => $nominee) {
                    if (($award > 0) && ($award <= $festival->award_nominations)) {
                        Vote::updateOrCreate(
                            [
                                'phone' => '375' . $request->code . $request->phone,
                                'email' => $request->email,
                                'award_id' => $award,
                            ],
                            [
                                'name' => $request->name,
                                'award_nominee' => $nominee,
                            ]
                        );
                    }
                }
            }

            return back()->with('status', __('Your votes were given to these nominees'));
        }

        return back()->with('warning', __('This festival has already passed'));
    }
}
