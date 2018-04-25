@extends('frontend.layouts.main1')
@section('style')
</style>
@endsection
@section('content')
    <section class="our-concern-area overflow-fix">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="our-editor-content overflow-fix">
              <h2>Director Reports</h2>
            </div>
          </div>
          <div class="col-md-6">
            <select class="form-control year change-year" name="year" title=" " required="" style="margin-bottom: 2%;">
                @for($i = 2000; $i <= 2050; $i++)
                    <option value="{{$i}}"
                    @if($i == date('Y'))
                    selected=""
                    @endif
                    >{{$i}}</option>
                @endfor
            </select>
          </div>
        </div>
      </div>
    </section>
    <section class="report-area overflow-fix">
      <div class="container">
        <div class="row right-me">
          <div class="col-md-5 col-lg-3">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-id="0" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Maksons Spinning Mills Limited</a></li>
              <li class="nav-item"><a class="nav-link" data-id="1" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Metro Spinning Limited</a></li>
            </ul>
          </div>
          <div class="col-md-7 col-lg-9">
            <div class="tab-content overflow-fix" id="myTabContent">
              <div class="tab-pane fade active" id="home">
                @if(sizeof($maksonReport)>0)
                @foreach($maksonReport as $mreport)
                <div class="tab-single-item-report overflow-fix">
                  <div id="maksonM" class="row margin-o">
                    <div class="col-md-6 padding-o">
                      <div class="single-item-report-left overflow-fix">
                        <p>{{ $mreport->title }}</p>
                      </div>
                    </div>
                    <div class="col-md-6 padding-o">
                      <div class="single-item-report-right overflow-fix d-flex justify-content-end">
                        <div class="icon-print">
                          @php $pdf = asset('/uploads/'. $mreport->file) @endphp
                          <a href="javascript:void(0)" onclick="printJS('{{$pdf}}')">
                            <i class="fas fa-print"></i>
                            <span>Print</span>
                          </a>
                        </div>
                        <div class="download-print"><a target="blank" href="{{ asset('/uploads/'. $mreport->file) }}"><i class="fas fa-download"></i><span>Download</span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
                @else
                <h4>Data not found!</h4>
                @endif
              </div>
              <div class="tab-pane fade" id="profile">
                @if(sizeof($metroReport)>0)
                @foreach($metroReport as $mereport)
                <div class="tab-single-item-report overflow-fix">
                  <div id="metroM" class="row margin-o">
                    <div class="col-md-6 padding-o">
                      <div class="single-item-report-left overflow-fix">
                        <p>{{ $mereport->title }}</p>
                      </div>
                    </div>
                    <div class="col-md-6 padding-o">
                      <div class="single-item-report-right overflow-fix d-flex justify-content-end">
                        <div class="icon-print">
                          @php $mpdf = asset('/uploads/'. $mereport->file) @endphp
                          <a href="javascript:void(0)" onclick="printJS('{{$mpdf}}')">
                            <i class="fas fa-print"></i>
                            <span>Print</span>
                          </a>
                        </div>
                        <div class="download-print"><a target="blank" href="{{ asset('/storage/'. $mereport->file) }}"><i class="fas fa-download"></i><span>Download</span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
                @else
                <h4>Data not found!</h4>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="subpage-footer-area overflow-fix">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="border-full-wdith overflow-fix"></div>
          </div>
          <div class="col-lg-6">
            <div class="subpage-footer-copy overflow-fix">
              <p>Maksons Group &copy 2018</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="subpage-footer overflow-fix d-flex">
              <h2>Follow us on</h2>
              <ul>
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
@endsection
@section('script')
<script src="{{ asset('makson/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
<script>
  $(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.change-year').change(function(){
      var year = $('.year').val();
      var id = $('.nav-tabs .active').attr('data-id');
        $('#myTabContent .active').html('<img class="loading" src="/makson/images/loder.gif">');
        $.ajax({
            url:'{{ URL::to('/directorReportPost') }}',
            type: "POST",
            data:{ year: year, id:id,},
            success: function(data) {
              console.log(data);
            if (typeof data !== 'undefined' && data.length > 0) {
              var result = '';
              $.each(data, function(index, value){
                result += '<div class="tab-single-item-report overflow-fix">';
                result += '<div id="metroM" class="row margin-o">';
                result += '<div class="col-md-6 padding-o">';
                result += '<div class="single-item-report-left overflow-fix">';
                result += '<p> '+value.title+' </p>';
                result += '</div>';
                result += '</div>';
                result += '<div class="col-md-6 padding-o">';
                result += '<div class="single-item-report-right overflow-fix d-flex justify-content-end">';
                result += '<div class="icon-print">';
                result += '<a href="javascript:void(0)" onclick="printJS('+value.fileFullpath+')">';
                result += '<i class="fas fa-print"></i>';
                result += '<span>Print</span>';
                result += '</a>';
                result += '</div>';
                result += '<div class="download-print"><a target="blank" href="/uploads/'+value.file+'"><i class="fas fa-download"></i><span>Download</span></a></div>';
                result += '</div>';
                result += '</div>';
                result += '</div>';
                result += '</div>';
              });
                $('#myTabContent .active').html(result);
            }else{
                $('#myTabContent .active').text("No data found");
            }
          }
        });
    });
  });
</script>
@endsection