@extends('user.layout.app')

@section('content')
    <section class="dashboard-section">
        <div class="outer-container">
            <div class="dashboard-content">
                <div class="activites-content">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 column">
                            <a href="#" class="single-item">
                                <div class="icon-box"><img src="{{ asset('assets/images/icons/wallet.png') }}" alt="">
                                </div>
                                <span>Wallet</span>
                                <h2>{{ auth()->user()->balance }}</h2>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 column">
                            <a href="#" class="single-item">
                                <div class="icon-box"><img src="{{ asset('assets/images/icons/deposit.png') }}"
                                        alt=""></div>
                                <span>Deposit</span>
                                <h2>{{ user_deposit() }}</h2>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 column">
                            <a href="#" class="single-item">
                                <div class="icon-box"><img src="{{ asset('assets/images/icons/withdraw.png') }}"
                                        alt=""></div>
                                <span>Withdraw</span>
                                <h2>{{ user_withdraw() }}</h2>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="table-content">
                    <div class="title-box text-center">Withdraw Transaction History</div>
                    <div class="dashboard-table">
                        <table id="example">
                            <thead>
                                <tr>
                                    <th>Amount</th>
                                    <th>Account</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transcations as $item)
                                    <tr>
                                        <td>{{ $item->amount }}</td>
                                        <td>{{ $item->number }}</td>
                                        <td class="date"><img src="{{ asset('assets/images/icons/icon-46.svg') }}"
                                                alt="">
                                            {{ date('d-m-y', strtotime($item->created_at)) }}
                                        </td>
                                        <td>
                                            @if ($item->status == 'pending')
                                                <span class="status-text pending">Pending</span>
                                            @else
                                                <span class="status-text complete">Approved</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
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
