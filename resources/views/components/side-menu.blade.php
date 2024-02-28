<div>
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
        <div class="position-sticky pt-2 sidebar-sticky">
            <ul class="nav flex-column">
                <li class="nav-item pb-4">
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('dashboard') }}">
                            <img class="rounded ml-4 w-75" src="{{asset('/images/elvich_logo.png')}}"/>
                        </a>
                    </div>
                </li>
                <hr/>
                <div class="pt-4 d-grid gap-3">
            <li class="nav-item">
                <a class="nav-link fs-5" href="/dashboard">
                <span class="align-text-bottom bi bi-house"></span>
                Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link fs-5" href="/resume/index">
                <span  class="align-text-bottom bi bi-envelope"></span>
                Resumes
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link fs-5" href="/job/index">
                <span class="align-text-bottom bi bi-basket3"></span>
                Jobs
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link fs-5" href="/users">
                <span class="align-text-bottom bi bi-person"></span>
                Users
                </a>
            </li>
                </div>
            </ul>
        </div>
    </nav>
</div>