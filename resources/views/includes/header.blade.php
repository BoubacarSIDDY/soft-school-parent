<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="dashboard_bar">
                        {{$pageTitle}}
                    </div>
                </div>
                <div class="header-right d-flex align-items-center">
                    <ul class="navbar-nav">
                        <li class="nav-item ps-3">
                            <div class="dropdown header-profile2">
                                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="header-info2 d-flex align-items-center">
                                        <div class="header-media">
                                            {{ Auth::user()->name.' '.Auth::user()->lastName }}
                                            <i class="fa fa-user text-primary"></i>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="card border-0 mb-0">
                                        <div class="card-header py-2">
                                            <div class="products">
                                                <div>
                                                    <h6>{{ Auth::user()->name.' '.Auth::user()->lastName }}</h6>
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer px-0 py-2">
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <a href="{{ route('logout') }}" class="dropdown-item ai-icon" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                    <i class="fa fa-fw fa-sign-out-alt opacity-25"></i>
                                                    <span class="ms-2 text-danger">{{ __('Se deconnecter') }}</span>
                                                </a>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
