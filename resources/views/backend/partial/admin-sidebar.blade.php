
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                {{-- <a class="navbar-brand" href="./"><img src="{{ asset('kkhs/backend/images/logo.png')}}" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="{{ asset('kkhs/backend/images/logo2.png')}}" alt="Logo"></a> --}}
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{url('/dashboard')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li>
                        <a href="{{route('users.index')}}"><i class="menu-icon fa fa-user"></i>Admin</a>
                    </li>
                    <li>
                        <a href="{{route('slider.index')}}"><i class="menu-icon fa fa-image"></i>Slider</a>
                    </li>
                     <li>
                        <a href="{{route('bulletin.index')}}"><i class="menu-icon fa fa-image"></i>Bulletin</a>
                    </li>
                    <li>
                        <a href="{{route('concern.index')}}"><i class="menu-icon fa fa-image"></i>Concern</a>
                    </li>
                    <li>
                        <a href="{{route('clientele.index')}}"><i class="menu-icon fa fa-image"></i>Clientele</a>
                    </li>
                    <li>
                        <a href="{{route('areport.index')}}"><i class="menu-icon fa fa-image"></i>Annual Report</a>
                    </li>
                    <li>
                        <a href="{{route('qreport.index')}}"><i class="menu-icon fa fa-image"></i>Quarterly Report</a>
                    </li>
                    <li>
                        <a href="{{route('dreport.index')}}"><i class="menu-icon fa fa-image"></i>Director Report</a>
                    </li>
                    <li>
                        <a href="{{route('cstatus.index')}}"><i class="menu-icon fa fa-image"></i>Compliance Status</a>
                    </li>
                    <li>
                        <a href="{{route('jobpost.index')}}"><i class="menu-icon fa fa-image"></i>Job Post</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel