<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" style="margin-top: 50px;">
			<span class="icon-menu"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="{{route('About')}}">About<span class="sr-only">(current)</span></a>
				</li>
				
				
				<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Gallery
</a>
<ul class="dropdown-menu">

<li>
<a class="dropdown-item" aria-haspopup="true" aria-expanded="false" href="{{route('Images')}}">Images</a>

</li>
    
    <li>
<a class="dropdown-item"  aria-haspopup="true" aria-expanded="false" href="{{route('Videos')}}">Videos</a>

</li>
</ul>
</li>
				
				
				<li class="nav-logo">
					<a href="{{route('Index')}}" class="navbar-brand"><img src="{{url('/')}}/public/frontend/images/logo.png" class="img-fluid" alt="logo"></a>
				</li>
				<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
University
</a>
<ul class="dropdown-menu">

<li class="dropdown">
<a class="dropdown-item dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">MBBS</a>
<ul class="dropdown-menu dropdown-menu1">
<li><a class="dropdown-item" href="{{route('OSH-State-University')}}">OSH University</a></li>
<li><a class="dropdown-item" href="{{route('Jalal-Abad-University')}}">Jalal Abad University</a></li>
<li><a class="dropdown-item" href="{{url('International-School-of-Medicine')}}">International School of Medicine</a></li>
<li><a class="dropdown-item" href="{{url('Asian-Medical-Institute')}}">Asian Medical Institute</a></li>
<li><a class="dropdown-item" href="{{url('Kyrgyz-State-Medical-Academy')}}">Kyrgyz State Medical Academy</a></li>
</ul>
</li>
</ul>
</li>
				
				<li class="nav-item">
					<a class="nav-link" href="{{route('Contact')}}">Contact</a>
				</li>
				
			</ul>
		</div>
	</nav>