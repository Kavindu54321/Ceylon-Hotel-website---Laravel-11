<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<li class="active"> <a href="{{url('admin/dashboard')}}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
						<li class="list-divider"></li>
						<li class="submenu"> <a href="#"><i class="fas fa-suitcase"></i> <span> Booking </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="{{route('booking.index')}}"> All Booking </a></li>
								<li><a href="edit-booking.html"> Edit Booking </a></li>
								<li><a href="{{route('booking.create')}}"> Add Booking </a></li>
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Customers </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="{{route('customer.index')}}"> All customers </a></li>
								<li><a href="edit-customer.html"> Edit Customer </a></li>
								<li><a href="{{route('customer.create')}}"> Add Customer </a></li>
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fas fa-key"></i> <span> Rooms </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="{{route('room.index')}}">All Rooms </a></li>
								<li><a href="{{route('room.create')}}"> Add Rooms </a></li>
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Staff </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="{{route('staff.index')}}">All Staff </a></li>
								
								<li><a href="{{route('staff.create')}}"> Add Staff </a></li>
							</ul>
						</li>
						
						
						
						
						<li> <a href="{{route('calendar.index')}}"><i class="fas fa-calendar-alt"></i> <span>Calendar</span></a> </li>
						
						
						<li> <a href="settings.html"><i class="fas fa-cog"></i> <span>Settings</span></a> </li>
						<li class="list-divider"></li>
						
						
					
						
					</ul>
				</div>
			</div>
		</div>