@php
    $prefix=Request::route()->getPrefix();
    $route=Route::current()->getName();
@endphp
<div class="mobile-sidebar-header d-md-none">
    <div class="header-logo">
        <a href="index.html"><img src="{{asset('public/assets/backend')}}/img/logo1.png" alt="logo"></a>
    </div>
</div>
    <div class="sidebar-menu-content">
        <ul class="nav nav-sidebar-menu sidebar-toggle-view">
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="flaticon-dashboard"></i><span>Dashboard</span></a>
                <ul class="nav sub-group-menu {{($prefix=='/dashboard')?'sub-group-active':''}} ">
                    <li class="nav-item">
                        <a href="{{route('dashboard')}}" class="nav-link {{($route=='dashboard')?'menu-active':''}}"><i class="fas fa-angle-right"></i>Admin</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="fas fa-angle-right"></i>Students</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="fas fa-angle-right"></i>Parents</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="fas fa-angle-right"></i>Teachers</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="flaticon-multiple-users-silhouette"></i><span>Manage Cariculam</span></a>
                <ul class="nav sub-group-menu {{($prefix=='/cariculam')?'sub-group-active':''}}">
                    <li class="nav-item">
                        <a href="{{route('cariculam.index')}}" class="nav-link {{($route=='cariculam.index')?'menu-active':''}}"><i class="fas fa-angle-right"></i>All Cariculam</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('cariculam.create')}}" class="nav-link {{($route=='cariculam.create')?'menu-active':''}}"><i class="fas fa-angle-right"></i>Add New Cariculam</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="flaticon-multiple-users-silhouette"></i><span>Manage Department</span></a>
                <ul class="nav sub-group-menu {{($prefix=='/department')?'sub-group-active':''}}">
                    <li class="nav-item">
                        <a href="{{route('department.index')}}" class="nav-link {{($route=='department.index')?'menu-active':''}}"><i class="fas fa-angle-right"></i>All department</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('department.create')}}" class="nav-link {{($route=='department.create')?'menu-active':''}}"><i class="fas fa-angle-right"></i>Add New Department</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="flaticon-multiple-users-silhouette"></i><span>Manage Semester</span></a>
                <ul class="nav sub-group-menu {{($prefix=='/semester')?'sub-group-active':''}}">
                    <li class="nav-item">
                        <a href="{{route('semester.index')}}" class="nav-link {{($route=='semester.index')?'menu-active':''}}"><i class="fas fa-angle-right"></i>All semester</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('semester.create')}}" class="nav-link {{($route=='semester.create')?'menu-active':''}}"><i class="fas fa-angle-right"></i>Add New Semester</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="flaticon-multiple-users-silhouette"></i><span>Manage Session</span></a>
                <ul class="nav sub-group-menu {{($prefix=='/session')?'sub-group-active':''}}">
                    <li class="nav-item">
                        <a href="{{route('session.index')}}" class="nav-link {{($route=='session.index')?'menu-active':''}}"><i class="fas fa-angle-right"></i>All session</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('session.create')}}" class="nav-link {{($route=='session.create')?'menu-active':''}}"><i class="fas fa-angle-right"></i>Add New Session</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="flaticon-multiple-users-silhouette"></i><span>Manage Author</span></a>
                <ul class="nav sub-group-menu {{($prefix=='/author')?'sub-group-active':''}}">
                    <li class="nav-item">
                        <a href="{{route('author.index')}}" class="nav-link {{($route=='author.index')?'menu-active':''}}"><i class="fas fa-angle-right"></i>All author</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('author.create')}}" class="nav-link {{($route=='author.create')?'menu-active':''}}"><i class="fas fa-angle-right"></i>Add New author</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="flaticon-multiple-users-silhouette"></i><span>Manage Publication</span></a>
                <ul class="nav sub-group-menu {{($prefix=='/publication')?'sub-group-active':''}}">
                    <li class="nav-item">
                        <a href="{{route('publication.index')}}" class="nav-link {{($route=='publication.index')?'menu-active':''}}"><i class="fas fa-angle-right"></i>All Publication</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('publication.create')}}" class="nav-link {{($route=='publication.create')?'menu-active':''}}"><i class="fas fa-angle-right"></i>Add New Publication</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="flaticon-books"></i><span>Library</span></a>
                <ul class="nav sub-group-menu {{($prefix=='/book')?'sub-group-active':''}}">
                    <li class="nav-item">
                        <a href="{{route('book.index')}}" class="nav-link {{($route=='book.index')?'menu-active':''}}"><i class="fas fa-angle-right"></i>All Book</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('book.create')}}" class="nav-link {{($route=='book.create')?'menu-active':''}}"><i class="fas fa-angle-right"></i>Add New Book</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="flaticon-multiple-users-silhouette"></i><span>Users Management</span></a>
                <ul class="nav sub-group-menu {{($prefix=='/user')?'sub-group-active':''}}">
                    <li class="nav-item">
                        <a href="{{route('user.index')}}" class="nav-link {{($route=='user.index')?'menu-active':''}}"><i class="fas fa-angle-right"></i>All User</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('user.create')}}" class="nav-link {{($route=='user.create')?'menu-active':''}}"><i class="fas fa-angle-right"></i>Add User</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('user.password')}}" class="nav-link {{($route=='user.password')?'menu-active':''}}"><i class="fas fa-angle-right"></i>Change Password</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Students</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="{{route('student.index')}}" class="nav-link"><i class="fas fa-angle-right"></i>All
                            Students</a>
                    </li>
                    <li class="nav-item">
                        <a href="student-details.html" class="nav-link"><i
                                class="fas fa-angle-right"></i>Student Details</a>
                    </li>
                    <li class="nav-item">
                        <a href="admit-form.html" class="nav-link"><i
                                class="fas fa-angle-right"></i>Admission Form</a>
                    </li>
                    <li class="nav-item">
                        <a href="student-promotion.html" class="nav-link"><i
                                class="fas fa-angle-right"></i>Student Promotion</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="flaticon-multiple-users-silhouette"></i><span>Teachers</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="all-teacher.html" class="nav-link"><i class="fas fa-angle-right"></i>All
                            Teachers</a>
                    </li>
                    <li class="nav-item">
                        <a href="teacher-details.html" class="nav-link"><i
                                class="fas fa-angle-right"></i>Teacher Details</a>
                    </li>
                    <li class="nav-item">
                        <a href="add-teacher.html" class="nav-link"><i class="fas fa-angle-right"></i>Add
                            Teacher</a>
                    </li>
                    <li class="nav-item">
                        <a href="teacher-payment.html" class="nav-link"><i
                                class="fas fa-angle-right"></i>Payment</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="flaticon-couple"></i><span>Parents</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="all-parents.html" class="nav-link"><i class="fas fa-angle-right"></i>All
                            Parents</a>
                    </li>
                    <li class="nav-item">
                        <a href="parents-details.html" class="nav-link"><i
                                class="fas fa-angle-right"></i>Parents Details</a>
                    </li>
                    <li class="nav-item">
                        <a href="add-parents.html" class="nav-link"><i class="fas fa-angle-right"></i>Add
                            Parent</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="flaticon-technological"></i><span>Acconunt</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="all-fees.html" class="nav-link"><i class="fas fa-angle-right"></i>All Fees
                            Collection</a>
                    </li>
                    <li class="nav-item">
                        <a href="all-expense.html" class="nav-link"><i
                                class="fas fa-angle-right"></i>Expenses</a>
                    </li>
                    <li class="nav-item">
                        <a href="add-expense.html" class="nav-link"><i class="fas fa-angle-right"></i>Add
                            Expenses</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i
                        class="flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i><span>Class</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="all-class.html" class="nav-link"><i class="fas fa-angle-right"></i>All
                            Classes</a>
                    </li>
                    <li class="nav-item">
                        <a href="add-class.html" class="nav-link"><i class="fas fa-angle-right"></i>Add New
                            Class</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="all-subject.html" class="nav-link"><i
                        class="flaticon-open-book"></i><span>Subject</span></a>
            </li>
            <li class="nav-item">
                <a href="class-routine.html" class="nav-link"><i class="flaticon-calendar"></i><span>Class
                        Routine</span></a>
            </li>
            <li class="nav-item">
                <a href="student-attendence.html" class="nav-link"><i
                        class="flaticon-checklist"></i><span>Attendence</span></a>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="flaticon-shopping-list"></i><span>Exam</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="exam-schedule.html" class="nav-link"><i class="fas fa-angle-right"></i>Exam
                            Schedule</a>
                    </li>
                    <li class="nav-item">
                        <a href="exam-grade.html" class="nav-link"><i class="fas fa-angle-right"></i>Exam
                            Grades</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="transport.html" class="nav-link"><i
                        class="flaticon-bus-side-view"></i><span>Transport</span></a>
            </li>
            <li class="nav-item">
                <a href="hostel.html" class="nav-link"><i class="flaticon-bed"></i><span>Hostel</span></a>
            </li>
            <li class="nav-item">
                <a href="notice-board.html" class="nav-link"><i
                        class="flaticon-script"></i><span>Notice</span></a>
            </li>
            <li class="nav-item">
                <a href="messaging.html" class="nav-link"><i
                        class="flaticon-chat"></i><span>Messeage</span></a>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="flaticon-menu-1"></i><span>UI Elements</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="notification-alart.html" class="nav-link"><i class="fas fa-angle-right"></i>Alart</a>
                    </li>
                    <li class="nav-item">
                        <a href="button.html" class="nav-link"><i class="fas fa-angle-right"></i>Button</a>
                    </li>
                    <li class="nav-item">
                        <a href="grid.html" class="nav-link"><i class="fas fa-angle-right"></i>Grid</a>
                    </li>
                    <li class="nav-item">
                        <a href="modal.html" class="nav-link"><i class="fas fa-angle-right"></i>Modal</a>
                    </li>
                    <li class="nav-item">
                        <a href="progress-bar.html" class="nav-link"><i class="fas fa-angle-right"></i>Progress Bar</a>
                    </li>
                    <li class="nav-item">
                        <a href="ui-tab.html" class="nav-link"><i class="fas fa-angle-right"></i>Tab</a>
                    </li>
                    <li class="nav-item">
                        <a href="ui-widget.html" class="nav-link"><i
                                class="fas fa-angle-right"></i>Widget</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="map.html" class="nav-link"><i
                        class="flaticon-planet-earth"></i><span>Map</span></a>
            </li>
            <li class="nav-item">
                <a href="account-settings.html" class="nav-link"><i
                        class="flaticon-settings"></i><span>Account</span></a>
            </li>
        </ul>
    </div>