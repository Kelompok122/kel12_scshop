@extends('layouts.app')

@section('content')

<!-- contact section start -->
    <div class="collection_text">Kirim Email</div>
    
    <div class="container-lg">
	<div class="row">
		<div class="col-md-8 mx-auto">
			<div class="contact-form">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <form action="{{ route('send.email') }}" method="post">
                @csrf
                <div class="form-group">
                    <br>
                    <br>
                    <br>
                    <label for="inputEmail">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Masukan Email Tujuan">
                    @error('email')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>    
					<div class="form-group">
						<label for="inputSubject">Subject</label>
                        <input type="text" name="subject" class="form-control" placeholder="Masukan subject">
                        @error('subject')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
					</div>
					<div class="form-group">
						<label for="inputMessage">Message</label>
                        <textarea name="content" rows="5" class="form-control" placeholder="Masukan Pesan Yang Akan Anda Kirim"></textarea>
                        @error('content')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
					</div>
					<div class="text-center">
						<button type="submit" class="btn btn-danger btn-block"><i class="fa fa-paper-plane"></i>Kirim</button>
					</div>            
				</form>
			</div>
		</div>
	</div>
</div>
<br />
<br />

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

@endsection