@extends('user.layout.app')

@section('content')
    <section class="dashboard-section">
        <div class="outer-container">
            <div class="dashboard-content">
                <div class="table-content">
                    <div class="title-box text-center">Team Members</div>
                    <div class="dashboard-table">
                        <table id="example">
                            <thead>
                                <tr>
                                    <th>User ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($team as $item)
                                    <tr>
                                        <td>{{ $item->user_id }}</td>
                                        <td>
                                            <div class="author-box">
                                                <div class="author-image"><img
                                                        src="{{ asset('assets/images/resource/author-5.png') }}"
                                                        alt="">
                                                </div>
                                                <span class="name">{{ $item->name }}</span>
                                            </div>
                                        </td>
                                        <td class="email">{{ $item->email }}</td>
                                        <td class="date"><img src="{{ asset('assets/images/icons/icon-46.svg') }}"
                                                alt="">
                                            {{ date('d-m-Y', strtotime($item->created_at)) }}
                                        </td>
                                    </tr>
                                @empty
                                    <h4 class="text-white">No Member</h4>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/data-table.js') }}"></script>
    <script src="{{ asset('assets/js/datatable.js') }}"></script>
@endsection
