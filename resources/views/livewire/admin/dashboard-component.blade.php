<div class="content">
    <style>
        .content {
          padding-top: 40px;
          padding-bottom: 40px;
        }
        .icon-stat {
            display: block;
            overflow: hidden;
            position: relative;
            padding: 15px;
            margin-bottom: 1em;
            background-color: #fff;
            border-radius: 4px;
            border: 1px solid #ddd;
        }
        .icon-stat-label {
            display: block;
            color: #999;
            font-size: 13px;
        }
        .icon-stat-value {
            display: block;
            font-size: 28px;
            font-weight: 600;
        }
        .icon-stat-visual {
            position: relative;
            top: 22px;
            display: inline-block;
            width: 32px;
            height: 32px;
            border-radius: 4px;
            text-align: center;
            font-size: 16px;
            line-height: 30px;
        }
        .bg-primary {
            color: #fff;
            background: #d74b4b;
        }
        .bg-secondary {
            color: #fff;
            background: #6685a4;
        }

        .icon-stat-footer {
            padding: 10px 0 0;
            margin-top: 10px;
            color: #aaa;
            font-size: 12px;
            border-top: 1px solid #eee;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 ">
              <div class="icon-stat">
                <div class="row">
                  <div class="col-xs-8 text-left">
                    <span class="icon-stat-label">Total Tran Request</span>
                    <span class="icon-stat-value">{{$totalCost}}</span>
                  </div>
                  <div class="col-xs-4 text-center">
                    <i class="fas fa-hand-holding-medical"></i>
                  </div>
                </div>
                <div class="icon-stat-footer">
                  <i class="fa fa-clock-o"></i> Updated Now
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="icon-stat">
                <div class="row">
                  <div class="col-xs-8 text-left">
                    <span class="icon-stat-label">Total Ongoing Request</span>
                    <span class="icon-stat-value">{{$totalPurchase}}</span>
                  </div>
                  <div class="col-xs-4 text-center">
                    <i class="fas fa-hand-holding-medical"></i>
                  </div>
                </div>
                <div class="icon-stat-footer">
                  <i class="fa fa-clock-o"></i> Updated Now
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="icon-stat">
                <div class="row">
                  <div class="col-xs-8 text-left">
                    <span class="icon-stat-label">Total Club Member</span>
                    <span class="icon-stat-value">{{$totalDelivered}}</span>
                  </div>
                  <div class="col-xs-4 text-center">
                    <i class="fas fa-hand-holding-medical"></i>
                  </div>
                </div>
                <div class="icon-stat-footer">
                  <i class="fa fa-clock-o"></i> Updated Now
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="icon-stat">
                  <div class="row">
                    <div class="col-xs-8 text-left">
                      <span class="icon-stat-label">Total Donar</span>
                      <span class="icon-stat-value">{{$totalDeclined}}</span>
                    </div>
                    <div class="col-xs-4 text-center">
                      <i class="fas fa-hand-holding-medical"></i>
                    </div>
                  </div>
                  <div class="icon-stat-footer">
                    <i class="fa fa-clock-o"></i> Updated Now
                  </div>
                </div>
              </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Your Tran Request
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($trans as $tran)
                                    <tr>
                                        <td>{{$tran->id}}</td>
                                        <td><img src="{{ asset('assets/images/products')}}/{{$tran->image}}" width="60px" alt="{{$tran->title}}"></td>
                                        <td>{{$tran->title}}</td>
                                        <td>{{$tran->status}}</td>
                                        <td>{{$tran->created_at}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        New Donation
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Donate As</th>
                                    <th>Donation Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($donations as $donation)
                                    <tr>
                                        <td>{{$donation->id}}</td>
                                        <td>{{$donation->donate_as}}</td>
                                        <td>{{$donation->donate_s}}</td>
                                        <td>{{$donation->created_at}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
