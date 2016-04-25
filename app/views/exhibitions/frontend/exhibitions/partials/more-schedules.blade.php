<div class="extra-schedules">
    <table class="table table-responsive table-bordered">
        @foreach ($schedules->groupByAuditorium() as $auditoriumSchedules)
            @foreach ($auditoriumSchedules->groupByDate() as $index => $dateSchedules)
                @foreach ($dateSchedules as $dayIndex => $schedule)
                    <tr>
                        @if ($index == 0 && $dayIndex == 0)
                            <td class="col-md-4 bold" rowspan="{{ $auditoriumSchedules->count() }}">
                                <span class="auditorium-name">
                                    <a href="#">
                                        {{ $schedule->getAuditorium()->getName() }}
                                    </a>
                                </span>
                            </td>
                        @endif
                        @if ($dayIndex == 0)
                            <td class="col-md-3 highlight text-center">
                                @lang('exhibitions.frontend.exhibition.show.date',
                                [
                                    'numeric_day' => $schedule->getEntry()->day,
                                    'textual_month' => trans('dates.months.' . $schedule->getEntry()->format('F')),
                                    'year' => $schedule->getEntry()->year
                                ])
                            </td>
                            <td class="col-md-5">
                                {{ HTML::schedulesTimeAsList($dateSchedules) }} hrs.
                            </td>
                        @endif
                    </tr>
                @endforeach
            @endforeach
        @endforeach
    </table>
</div>
