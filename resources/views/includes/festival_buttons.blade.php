{{ Html::linkRoute('festivals.festival.participate', __('Participate!'), ['festival' => $festival], ['class' => 'btn btn-primary text-uppercase mb-1']) }}
{{ Html::linkRoute('festivals.festival.visit', __('Want to visit!'), ['festival' => $festival], ['class' => 'btn btn-success text-uppercase mb-1']) }}
{{ Html::linkRoute('festivals.festival.award', __('Award') . ' ' . $festival->award, ['festival' => $festival], ['class' => 'btn btn-info text-uppercase mb-1']) }}
