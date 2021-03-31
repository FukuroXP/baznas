@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="container">
                <div style="height: 600px" id="viewpdf"></div>
            </div>

            <embed src="{{ asset('1.pdf') }}" type="application/pdf" width="100%" height="600px">
            <object width="100%" height="100%" type="application/pdf"
                    data="{{ asset('1.pdf') }}#toolbar=0" id="pdf_content"><p>Document load was not
                    successful.</p></object>

            <div style="height: 600px" class="container">
                @php
                    $mpdf = new \Mpdf\Mpdf();

                $mpdf->SetDisplayMode('fullwidth');

                $mpdf->WriteHTML('Hello World');
                $mpdf->Output("{{ asset('1.pdf') }}");
                @endphp
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <script src="{{ asset('PDFObject/pdfobject.min.js') }}"></script>
    <script>
        var viewer = $('#viewpdf');
        PDFObject.embed('{{ asset('1.pdf') }}', viewer);
    </script>
@endsection
