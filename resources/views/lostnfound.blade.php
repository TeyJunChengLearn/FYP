@extends('layouts.forumlayout')
@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="/css/test.css">
<link rel="stylesheet" href="/css/announcements.css">
@endsection
@section('content')
    <main>
        <div class="container m-5">
        <div class="container"><h3><b>Lost and Found</b></h3></div>
            <div class="container m-5 pt-4 pb-2" style="background-color: white">
                <div class="mb-3">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Subject">
                </div>
                <div class="mb-3">
                    <textarea class="form-control" id="exampleFormControlInput1" placeholder="Text"  style="width: 100%; height: 200px;"></textarea>
                </div>
                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Add Image(s)</label>
                    <input class="form-control" type="file" id="formFileMultiple" multiple style="width: 20%"">
                </div>
                <div class="mb-2">
                    <button type="submit" class="btn btn-warning">Submit</button>
                    <button type="cancel" class="btn btn-outline-warning">Cancel</button>
                </div>
            </div>
            <div class="container m-5">
                <h3><i>Emergency sent! APPEAR WHEN SUMBIT</i></h3>
                <p>Thank you for sending your inquiries. We will post it as soon as possible.</p>
            </div>
            <div><img src="/img/thankyouuu.png" style="float:right; max-height: 200px;"/></div>

        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection
