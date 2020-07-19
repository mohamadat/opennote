@extends('homepage')

@section('noteform')



    <!--==========================
      Add new note Section
    ============================-->

<section id="notesection">
<div class="wrapper">
    <div class="title">
      Registration Form
    </div>
    <div class="form">

		  <form method="POST" action="/notes/store" enctype="multipart/form-data">
	       {{csrf_field()}}
			        <div id="errormessage"></div>

			       <div class="inputfield">
			          <label>title</label>
			          <input type="text" class="input" name="title">
			       </div>
			       <div class="inputfield">
			          <label>Note Body</label>
			          <textarea class="textarea" name="body"></textarea>
			       </div>
			       <div class="inputfield">
			          <label>Image</label>
			          <input type="file" class="form-control" name="url" id="url" placeholder="url" class="input">
			        </div>
			      <div class="inputfield">
			        <input type="submit" value="Take note" class="btn">
			      </div>
	      </form>
    </div>
</div>
</section>

    <!-- #note Section -->




@stop
