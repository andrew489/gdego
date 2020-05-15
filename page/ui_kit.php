<div class="container p-5 bg-white ui_kit">
	<div class="row  grid-color-1">
		<div class="col grid-color-2"></div>
		<div class="col grid-color-2"></div>
		<div class="col grid-color-2"></div>
		<div class="col grid-color-2"></div>
		<div class="col grid-color-2"></div>
		<div class="col grid-color-2"></div>
		<div class="col grid-color-2"></div>
		<div class="col grid-color-2"></div>
		<div class="col grid-color-2"></div>
		<div class="col grid-color-2"></div>
		<div class="col grid-color-2"></div>
		<div class="col grid-color-2"></div>
	</div>

	<div class="row grid-color-1">
		<div class="col-2 grid-color-2"></div>
		<div class="col-2 grid-color-2"></div>
		<div class="col-2 grid-color-2"></div>
		<div class="col-2 grid-color-2"></div>
		<div class="col-2 grid-color-2"></div>
		<div class="col-2 grid-color-2"></div>
	</div>

	<div class="row grid-color-1">
		<div class="col-3 grid-color-2"></div>
		<div class="col-3 grid-color-2"></div>
		<div class="col-3 grid-color-2"></div>
		<div class="col-3 grid-color-2"></div>
	</div>

	<div class="row grid-color-1">
		<div class="col-4 grid-color-2"></div>
		<div class="col-4 grid-color-2"></div>
		<div class="col-4 grid-color-2"></div>
	</div>

	<div class="row grid-color-1">
		<div class="col-6 grid-color-2"></div>
		<div class="col-6 grid-color-2"></div>
	</div>

	<div class="row grid-color-1">
		<div class="col-7 grid-color-2"></div>
		<div class="col-5 grid-color-2"></div>
	</div>

	<div class="row grid-color-1">
		<div class="col-8 grid-color-2"></div>
		<div class="col-4 grid-color-2"></div>
	</div>

	<div class="row grid-color-1">
		<div class="col-9 grid-color-2"></div>
		<div class="col-3 grid-color-2"></div>
	</div>

	<div class="row grid-color-1">
		<div class="col-10 grid-color-2"></div>
		<div class="col-2 grid-color-2"></div>
	</div>

	<div class="row grid-color-1">
		<div class="col-11 grid-color-2"></div>
		<div class="col grid-color-2"></div>
	</div>

	<div class="row grid-color-1">
		<div class="col-12 grid-color-2"></div>
	</div>

</div>

<!-- elements -->
<div class="container bg-white p-5 mt-5 ui_kit">

	<nav class="font-weight-bold">
		<ul class="list-inline row  mt-3 ">
			<li class="col-2"><a class="text-dark" href="#">Default</a></li>
			<li class="col-2"><a class="text-dark" href="#">Focus</a></li>
			<li class="col-2"><a class="text-dark" href="#">Done</a></li>
			<li class="col-2"><a class="text-dark" href="#">Error</a></li>
			<li class="col-2"><a class="color-dis" href="#">Disabled</a></li>
		</ul>
	</nav>

	<div class="row mt-5">
		<div class="form-check col-2">
			<input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleCheckbox" value="option1">
			<label class="form-check-label" type="checkbox" for="exampleCheckbox">
				<span class="">Checkbox 1: false</span>
			</label>
		</div>

		<div class="col-2"></div>
		
		<div class="form-check col-2">
			<input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleCheckbox2" value="option2" checked>
			<label class="form-check-label " type="checkbox" for="exampleCheckbox2">
				<span class="">Checkbox 2: true</span>
			</label>
		</div>

		<div class="col-2"></div>

		<div class="col-2"></div>
	</div>

	<div class="row  mt-5">
		<div class="form-check col-2">
			<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
			<label class="form-check-label " type="radio" for="exampleRadios1">
				<span class="">radio 1</span>
			</label>
		</div>

		<div class="col-2"></div>

		<div class="form-check col-2">
			<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" checked>
			<label class="form-check-label " type="radio" for="exampleRadios2">
				<span class="">radio 2</span>
			</label>
		</div>

		<div class="col-2"></div>

	</div>

	<div class="row">
		<div class="col-2">	<!-- Rounded switch -->
			<label class="switch mb-0 mt-5">
				<input type="checkbox">
				<span class="slider round"></span>
			</label>
			<span class="ml-2">Switch 2: False</span>
		</div>

		<div class="col-2"></div>

		<div class="col-2">
			<label class="switch mb-0 mt-5">
				<input type="checkbox" checked>
				<span class="slider round"></span>
			</label>
			<span class="ml-2">Switch 1: False</span>
		</div>

		<div class="col-2"></div>

		<div class="col-2">
			<label class="switch mb-0 mt-5">
				<input type="checkbox" disabled>
				<span class=" slider round"></span>
			</label>
			<span class=" ml-2" >Switch 1: False</span>
		</div>

	</div>

	<div class="row mt-5">
		
		<form class="col-2 default" action="">
			<input class="form-control pl-5" type="text" placeholder="Enter your message" name="text" aria-label="Search">
			<span class="mdi mdi-magnify search-icon"></span>
		</form>
		
		<form class="col-2 focus" action="">
			<input class="form-control pl-5" type="text" placeholder="Enter your message" name="text" aria-label="Search">
			<span class="mdi mdi-magnify search-icon"></span>
		</form>
		
		<form class="col-2 done" action="">
			<input class="form-control pl-5" type="text" placeholder="Enter your message" name="text" aria-label="Search">
			<span class="mdi mdi-magnify search-icon"></span>
		</form>
		
		<form class="col-2 error" action="">
			<input class="form-control pl-5" type="text" placeholder="Enter your message" name="text" aria-label="Search">
			<span class="mdi error mdi-magnify search-icon"></span>
			<p class="error">text error</p>
		</form>
		
		<form class="col-2 disabled" action="">
			<input class="form-control pl-5" type="text" disabled placeholder="Enter your message" name="text" aria-label="Search">
			<span class="mdi mdi-magnify search-icon"></span>
		</form>
		
	</div>
</div>


<!-- buttons -->
<div class="container bg-white p-5 mt-5 ui_kit">

	<nav class="font-weight-bold">
		<ul class="list-inline row  mt-3 ">
			<li class="col-2"><a class="text-dark" href="#">Default</a></li>
			<li class="col-2"><a class="text-dark" href="#">Hover</a></li>
			<li class="col-2"><a class="text-dark" href="#">Done</a></li>
			<li class="col-2"><a class="text-dark" href="#">Error</a></li>
			<li class="col-2"><a class="color-dis" href="#">Disabled</a></li>
		</ul>
	</nav>

	<div class="row mt-5">
		<div class="col-2"><a href="#" class="text-uppercase text-decoration-underline">Link 1 </a></div>

		<div class="col-2"><a href="#" class="text-uppercase text-decoration-underline">Link 1 </a></div>
		
		<div class="col-2"><a href="#" class="text-uppercase text-decoration-underline">Link 1 </a></div>

		<div class="col-2"></div>

		<div class="col-2"><a href="#" class="disabled text-uppercase">Link 1 </a></div>
	</div>

	<div class="row mt-5">
		<div class="col-2">
			<button class="btn px-2" type="button">NORMAL BUTTON</button>
		</div>
			
		<div class="col-2">
			<button class="btn btn-hover px-2" type="button">NORMAL BUTTON</button>
		</div>

		<div class="col-2">
			<button class="btn btn-active px-2" type="button">NORMAL BUTTON</button>
		</div>

		<div class="col-2"></div>

		<div class="col-2">
			<button class="btn disabled px-2" type="button" disabled>NORMAL BUTTON</button>
		</div>

	</div>



</div>

<div class="container mt-5 p-5 bg-white ui_kit">
	<h1 class="">H1 Lorem ipsum dolor (3.157em)</h1>
	<h2>H2 Lorem ipsum dolor (2.369em)</h2>
	<h3>H3 Lorem ipsum dolor (1.777em)</h3>
	<h4>H4 Lorem ipsum dolor (1.333em)</h4>
	<h5>P Lorem ipsum dolor (1em)</h5>
	<h6>Lorem ipsum dolor (0.75em)</h6>
</div>


<div class="container bg-white palette p-5 mt-5 ui_kit">
	<div class="mb-5 pt-5"> 
		<h2 class="mb-3 font-weight-bold ">Global color</h2>
		<div class="row d-flex ">

            <div class="col"><div class="rounded-circle palette-1"></div></div>
            <div class="col"><div class="rounded-circle ml-3 palette-2"></div></div>
            <div class="col"><div class="rounded-circle ml-3 palette-3"></div></div>
		</div>
        <div class="row d-flex ">
			<div class="col">class="brown--default"</div>
			<div class="col">class="brown--active"</div>
			<div class="col">class="brown--dis"</div>
		</div>
	</div>
	<div class="mb-5 row">
		<div class="col-9">
			<h2 class="mb-3 font-weight-bold">Elements color</h2>
			<div class="d-flex row">
                <div class="col"><div class="rounded-circle palette-4"></div></div>
                <div class="col"><div class="rounded-circle ml-3 palette-5"></div></div>
			</div>
            <div class="row d-flex ">
                <div class="col">class="black-10"</div>
                <div class="col">class="linen"</div>
            </div>
		</div>
		<div class="col-3">
			<h2 class="mb-3 font-weight-bold">Palete</h2>
			<div class="d-flex row">
                <div class="col"><div class="rounded-circle palette-6"></div></div>
                    <div class="col"><div class="rounded-circle ml-3 palette-7"></div></div>
			</div>
            <div class="row d-flex ">
                <div class="col">class="brown"</div>
                <div class="col">class="danger"</div>
            </div>
		</div>
	</div>
	<div class="pb-5">
		<h2 class="mb-3 font-weight-bold">Text color</h2>
		<div class="d-flex row">
            <div class="col"><div class="rounded-circle palette-8"></div></div>
            <div class="col"><div class="rounded-circle ml-3 palette-9"></div></div>
            <div class="col"><div class="rounded-circle ml-3 palette-10"></div></div>
		</div>
        <div class="row d-flex ">
            <div class="col">class="text-100"</div>
            <div class="col">class="text-60"</div>
            <div class="col">class="text-35"</div>
        </div>
	</div>
	
</div>


	