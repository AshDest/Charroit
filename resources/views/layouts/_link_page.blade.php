<div class="row">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto">
                                <h4 class="mb-0" style="color: white;">
                                <b style="color: white; ">{{$link_page}}</b>
                            </h4>
                                @if( $link_page == 'Dashboard')
                                <p style="color: white; ">Welcome to admin panel</p>
                                @endif
                            </div>

                            <ol class="breadcrumb bg-transparent align-self-center m-0 p-0 " style="color: white; ">

                                @if( $link_page != 'Dashboard')
                                <li class="breadcrumb-item">
                                    <a href="/dashboard/0/0/0/0" style="color: white; ">
                                    <i class="fas fa-home"></i>&nbsp;Dashboard</a>
                                </li>
                                @endif


                                @if( $link_page == 'Alter task')
                                <li class="breadcrumb-item">
                                    <a href="/task" style="color: white; ">
                                    Task</a>
                                </li>
                                @endif

                                <li class="breadcrumb-item active">

                                    @if( $link_page == 'Dashboard')
                                        <a href="/dashboard/0/0/0/0" style="color: white; ">
                                    @else
                                        <a href="#" style="color: white; ">
                                    @endif
                                            <b style="color: white; ">

                                                @if( $link_page == 'Dashboard')
                                                    <i class="fas fa-home"></i>&nbsp;
                                                @endif
                                            {{$link_page}}</b>
                                        </a>

                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
