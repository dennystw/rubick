<div class="navbar-fixed">
	<nav class="pink accent-3" role="navigation">
		<div class="nav-wrapper container"><a id="logo-container" href="{{ url('/') }}" class="brand-logo">Rubick</a>
			
			<ul class="right hide-on-med-and-down">
				<!-- Authentication links -->
				@if (Auth::guest())
					<li><a href="{{ url('/login') }}">Login</li>
				@else
						<li>
						<!-- Dropdown Trigger -->
						  <a class='dropdown-button' href='#' data-activates='dropdown1'>{{ Auth::user()->name }}</a>

						 <!-- Dropdown Structure -->
						  <ul id='dropdown1' class='dropdown-content'>
						    <li>
						    	<a href="{{ route('logout') }}"
	                                onclick="event.preventDefault();
	                                         document.getElementById('logout-form').submit();">
	                                Logout
	                            </a>

	                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                                {{ csrf_field() }}
	                            </form>
						    </li>
						  </ul>
						</li>
				@endif
			</ul>

			<ul class="right hide-on-med-and-down">
				<li><a href="{{ url('/') }}">Home</a></li>
			</ul>

			<ul id="nav-mobile" class="side-nav">
				<li><a href="{{ url('/') }}">Home</a></li>
			</ul>

			<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>

		</div>
	</nav>
</div>