@extends('partial.master')

{{-- @section('judul')
<div class="text-center">
    <img src="https://majalahfranchise.com/wp-content/uploads/2020/07/LogoEdulab.png" class="rounded img-fluid" alt="..." width="200px">
  </div>
@endsection --}}

@section('content')
<img src="{{asset('/logo/rise.jpg')}}" class="container-fluid rounded" style="background-color:white;" alt="">
<br>
{{-- coba --}}

<div class="container-fluid pt-5">
  <div class="container pb-3">
    <div class="row">
      <div class="col-lg-4 col-md-6 pb-1">
        <div
          class="d-flex bg-gray shadow-sm border-top rounded mb-4"
          style="padding: 30px;"
        >
          <i
            class="flaticon-050-fence h1 font-weight-normal text-primary mb-3"
          ></i>
          <div class="pl-4">
            <h4>RISE MOTTO</h4>
            <p class="m-0 text-white">
              Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero
              lorem amet elitr vero...
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 pb-1">
        <div
          class="d-flex bg-gray shadow-sm border-top rounded mb-4"
          style="padding: 30px"
        >
          <i
            class="flaticon-022-drum h1 font-weight-normal text-primary mb-3"
          ></i>
          <div class="pl-4">
            <h4>RISE MOTTO</h4>
            <p class="m-0 text-white">
              Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero
              lorem amet elitr vero...
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 pb-1">
        <div
          class="d-flex shadow-sm border-top rounded mb-4"
          style="padding: 30px; background-color:#cbb667"
        >
          <i
            class="flaticon-030-crayons h1 font-weight-normal text-primary mb-3"
          ></i>
          <div class="pl-4">
            <h4>RISE MOTTO</h4>
            <p class="m-0">
              Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero
              lorem amet elitr vero...
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 pb-1">
        <div
          class="d-flex bg-gray shadow-sm border-top rounded mb-4"
          style="padding: 30px"
        >
          <i
            class="flaticon-017-toy-car h1 font-weight-normal text-primary mb-3"
          ></i>
          <div class="pl-4">
            <h4>RISE MOTTO</h4>
            <p class="m-0 text-white">
              Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero
              lorem amet elitr vero...
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 pb-1">
        <div
          class="d-flex shadow-sm border-top rounded mb-4"
          style="padding: 30px; background-color:#cbb667"
        >
          <i
            class="flaticon-025-sandwich h1 font-weight-normal text-primary mb-3"
          ></i>
          <div class="pl-4">
            <h4>RISE MOTTO</h4>
            <p class="m-0">
              Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero
              lorem amet elitr vero...
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 pb-1">
        <div
          class="d-flex shadow-sm border-top rounded mb-4"
          style="padding: 30px; background-color:#cbb667"
        >
          <i
            class="flaticon-047-backpack h1 font-weight-normal text-primary mb-3"
          ></i>
          <div class="pl-4">
            <h4>RISE MOTTO</h4>
            <p class="m-0">
              Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero
              lorem amet elitr vero...
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- coba --}}
<div class="jumbotron text-black bg-image" style="background-color:white; padding-top:0.5cm; padding-bottom:0.5cm; margin-left:1.7cm;margin-right:1.7cm">

<div class="row rounded" style="background-image:url('{{asset('/logo/bg-why.png')}}'); background-size:100%;  background-position:center; background-repeat:no-repeat;">
  <div class="col">
      <h1 class="display-4"><b>WHY US?</b></h1>
      <p class="lead text-justify" style="margin-left:0.5cm;margin-top:1cm">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
      <hr class="my-4">
      <p class="text-justify" style="margin-left:0.5cm">It uses utility classes for typography and spacing to space content out within the larger container.</p>
      <p class="lead" style="margin-left:0.5cm">
        <a class="btn btn-dark btn-lg" href="/aboutus" role="button">Learn more</a>
      </p>  
  </div>
  <div class="col">
    <div class="text-center" style="padding-top:1cm;padding-left:1cm">
      <img style="margin-top:-2cm; margin-bottom:-1cm; margin-right:-2cm; margin-left:-2.5cm; width:120%; height:120%" src="{{asset('logo/study.png')}}" class="rounded-circle" alt="...">
    </div>
  </div>
</div>
</div>

<div class="jumbotron bggo bg-white rounded" style="padding-top:2%; padding-bottom:2%;margin-left:1.7cm;margin-right:1.7cm">
    <div class="row">
        <div class="col ">
            <h3 class="text-warning"><b>RISE FACILITY</b></h3>
            {{-- Accordions --}}
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Facility 1
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Facility 2
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Facility 3
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                </div>
              </div>
            </div>
            {{-- Accordions End --}}
        </div>
        <div class="col" style="padding-top: 1.2cm">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100 rounded" src="https://s4.bukalapak.com/rev-banner/flash_banner/297869192/w-640/desktop_BankCicilanPromoCNYFeb2024_2d3c419b764799d6fdca72aef4273537.jpeg.webp" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100 rounded" src="https://s4.bukalapak.com/rev-banner/flash_banner/721700095/w-640/desktop_AngpaoCintaCNYandValentine_a0f22b0542700a781c30ded17247a2bd.jpeg.webp" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100 rounded" src="https://s4.bukalapak.com/rev-banner/flash_banner/370456528/w-640/desktop_BLINGValentineFeb24_a0d99c51691f094cce402658e9e72b10.png.webp" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>        
        </div>

    </div>
</div>

{{-- coba --}}
<section class="services" id="services">
  <div class="container-fluid">
    <div class="row" style="margin-left:1.7cm;margin-right:1.7cm">
      <div class="col-lg-12">
        <div class="section-heading bg-dark rounded">
          <h5 class="text-center text-white">Our Services</h5>
          <h4 class="text-center text-white">Provided <i class=" text-warning">Services</i></h4><br>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="owl-service-item owl-carousel">
          <div class="item">
            <div class="service-item">
              <div class="icon">
                <img src="{{asset('/template_3/assets/images/service-icon-01.png')}}" alt="">
              </div>
              <h4>Useful Tricks</h4>
              <p>EduWell is the professional HTML5 template for your school or university websites.</p>
            </div>
          </div>
          <div class="item">
            <div class="service-item">
              <div class="icon">
                <img src="{{asset('/template_3/assets/images/service-icon-02.png')}}" alt="">
              </div>
              <h4>Creative Ideas</h4>
              <p>You can download and use this EduWell Template for your teaching and learning stuffs.</p>
            </div>
          </div>
          <div class="item">
            <div class="service-item">
              <div class="icon">
                <img src="{{asset('/template_3/assets/images/service-icon-03.png')}}" alt="">
              </div>
              <h4>Ready Target</h4>
              <p>Please tell your friends about the best CSS template website that is TemplateMo.</p>
            </div>
          </div>
          <div class="item">
            <div class="service-item">
              <div class="icon">
                <img src="{{asset('/template_3/assets/images/service-icon-04.png')}}" alt="">
              </div>
              <h4>Technology</h4>
              <p>Aenean bibendum consectetur ex eu porttitor. Pellentesque id ultrices metus.</p>
            </div>
          </div>
          <div class="item">
            <div class="service-item">
              <div class="icon">
                <img src="{{asset('/template_3/assets/images/service-icon-01.png')}}" alt="">
              </div>
              <h4>Useful Tricks</h4>
              <p>In non nisi eget magna efficitur ultricies non quis sapien. Pellentesque tellus.</p>
            </div>
          </div>
          <div class="item">
            <div class="service-item">
              <div class="icon">
                <img src="{{asset('/template_3/assets/images/service-icon-02.png')}}" alt="">
              </div>
              <h4>Creative Ideas</h4>
              <p>Aenean bibendum consectetur ex eu porttitor. Pellentesque id ultrices metus.</p>
            </div>
          </div>
          <div class="item">
            <div class="service-item">
              <div class="icon">
                <img src="{{asset('/template_3/assets/images/service-icon-03.png')}}" alt="">
              </div>
              <h4>Ready Target</h4>
              <p>In non nisi eget magna efficitur ultricies non quis sapien. Pellentesque tellus.</p>
            </div>
          </div>
          <div class="item">
            <div class="service-item">
              <div class="icon">
                <img src="{{asset('/template_3/assets/images/service-icon-04.png')}}" alt="">
              </div>
              <h4>Technology</h4>
              <p>Aenean bibendum consectetur ex eu porttitor. Pellentesque id ultrices metus.</p>
            </div>
          </div>
          <div class="item">
            <div class="service-item">
              <div class="icon">
                <img src="{{asset('/template_3/assets/images/service-icon-01.png')}}" alt="">
              </div>
              <h4>Useful Tricks</h4>
              <p>In non nisi eget magna efficitur ultricies non quis sapien. Pellentesque tellus.</p>
            </div>
          </div>
          <div class="item">
            <div class="service-item">
              <div class="icon">
                <img src="{{asset('/template_3/assets/images/service-icon-02.png')}}" alt="">
              </div>
              <h4>Creative Ideas</h4>
              <p>Aenean bibendum consectetur ex eu porttitor. Pellentesque id ultrices metus.</p>
            </div>
          </div>
          <div class="item">
            <div class="service-item">
              <div class="icon">
                <img src="{{asset('/template_3/assets/images/service-icon-03.png')}}" alt="">
              </div>
              <h4>Ready Target</h4>
              <p>In non nisi eget magna efficitur ultricies non quis sapien. Pellentesque tellus.</p>
            </div>
          </div>
          <div class="item">
            <div class="service-item">
              <div class="icon">
                <img src="{{asset('/template_3/assets/images/service-icon-04.png')}}" alt="">
              </div>
              <h4>Technology</h4>
              <p>Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- coba end --}}
<br><br><br>
<h2 class="text-warning text-center rounded" style="margin-left:1.7cm;margin-right:1.7cm;background-color:rgb(63, 61, 61);"><br><b>PROGRAM</b><br><br></h2>

{{-- Batas atas --}}
<br>
<div class="row" style="margin-left:1.7cm;margin-right:1.7cm">
  @forelse ($category as $item)
      <div class="col-4">
          <div class="card" style="background-color:#cbb667; padding-top:0.2cm;">
              <img class="card-img-top rounded-circle" src="data:image/jpeg;base64,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" alt="Card image cap">
              <div class="card-body">
                  <h3 class="card-title  text-black text-capitalize"><b>{{$item->name}}</b></h3>
                  {{-- <span class="badge badge-info">Online</span>
                  <span class="badge badge-danger">Offline</span> --}}
                  <p class="card-text text-white">{{$item->description}}</p>
                  <div class="card-footer  rounded-pill">
                    <a href="/category/{{$item->id}}" class="btn btn-dark text-white container">Detail</a>
                  </div>
              </div>
          </div> 
      </div>
            
  @empty
   <h2>Tidak ada Produk</h2>
  @endforelse


</div>

{{-- Batas bawah --}}
  {{-- <div class="card-deck">
    @forelse ($category as $item)
      <div class="card" style="background-color:#cbb667; padding-top:0.2cm;">
        <img class="card-img-top rounded-circle" src="data:image/jpeg;base64,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" alt="Card image cap">
        <div class="card-body">
          <h2 class="card-title text-black text-capitalize"><h3><b>{{$item->name}}</b></h3></h2>
          <p class="card-text text-white">{{$item->description}}</p>
        </div>
        <div class="card-footer  rounded-pill">
          <a href="/category/{{$item->id}}" class="btn btn-dark text-white container">Detail</a>
        </div>
      </div>   
    @empty
     <H2>Tidak ada kelas</H2>
    @endforelse
  </div>  --}}

{{-- <div class="card-deck">
    <div class="card" style="background-color:#cbb667; padding-top:0.2cm;">
      <img class="card-img-top rounded-circle" src="data:image/jpeg;base64,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" alt="Card image cap">
      <div class="card-body">
        <h2 class="card-title text-black text-capitalize"><h3><b>TOEFL</b></h3></h2>
        <p class="card-text text-white">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer  rounded-pill">
        <a href="/toefl" class="btn btn-dark text-white container">Detail</a>
      </div>
    </div>
    <div class="card" style="background-color:#cbb667; padding-top:0.2cm;">
      <img class="card-img-top rounded-circle" src="data:image/jpeg;base64,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" alt="Card image cap">
      <div class="card-body">
        <h2 class="card-title text-black text-capitalize"><h3><b>IELTS</b></h3></h2>
        <p class="card-text text-white">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="card-footer rounded-pill">
        <a href="/ielts" class="btn btn-dark text-white container">Detail</a>
      </div>
    </div>
    <div class="card" style="background-color:#cbb667; padding-top:0.2cm;">
      <img class="card-img-top rounded-circle" src="data:image/jpeg;base64,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" alt="Card image cap">
      <div class="card-body">
        <h2 class="card-title text-black"><h3><b>GRE</b></h3></h2>
        <p class="card-text text-white">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer text-white rounded-pill">
        <a href="/gre" class="btn btn-dark text-white container">Detail</a>
      </div>
    </div>
  </div> --}}
  <br><br><br>
  <section class="testimonials" id="testimonials">
    <div class="container-fluid">
      <div class="row" style="margin-left:1.7cm;margin-right:1.7cm;">
        <div class="col-lg-12">
          <div class="section-heading rounded" style="background-color: rgb(63, 61, 61)">
            <h5 class="text-white">Testimonials</h5>
            <h4 class="text-white">What They <em class="text-warning">Think</em></h4><br>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-testimonials owl-carousel" style="position: relative; z-index: 5;">
            <div class="item" style="background-color:#cbb667">
              <p>“just think about TemplateMo if you need free CSS templates for your website”</p>
                <h4>Catherine Walk</h4>
                <span>CEO &amp; Founder</span>
                <img src="{{asset('/logo/chat.png')}}"  alt="">
            </div>
            <div class="item" style="background-color:#cbb667">
              <p>“think about our website first when you need free HTML templates for your website”</p>
                <h4>David Martin</h4>
                <span>CTO of Tech Company</span>
                <img src="{{asset('/logo/chat.png')}}"  alt="">
            </div>
            <div class="item" style="background-color:#cbb667">
              <p>“just think about our website wherever you need free templates for your website”</p>
                <h4>Sophia Whity</h4>
                <span>CEO and Co-Founder</span>
                <img src="{{asset('/logo/chat.png')}}"  alt="">
            </div>
            <div class="item" style="background-color:#cbb667">
              <p>“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”</p>
                <h4>Helen Shiny</h4>
                <span>Tech Officer</span>
                <img src="{{asset('/logo/chat.png')}}"  alt="">
            </div>
            <div class="item" style="background-color:#cbb667">
              <p>“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”</p>
                <h4>George Soft</h4>
                <span>Gadget Reviewer</span>
                <img src="{{asset('/logo/chat.png')}}"  alt="">
            </div>
            <div class="item" style="background-color:#cbb667">
              <p>“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”</p>
                <h4>Andrew Hall</h4>
                <span>Marketing Manager</span>
                <img src="{{asset('/logo/chat.png')}}"  alt="">
            </div>
            <div class="item" style="background-color:#cbb667">
              <p>“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”</p>
                <h4>Maxi Power</h4>
                <span>Fashion Designer</span>
                <img src="{{asset('/logo/chat.png')}}" alt="">
            </div>
            <div class="item" style="background-color:#cbb667">
              <p>“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”</p>
                <h4>Olivia Too</h4>
                <span>Creative Designer</span>
                <img src="{{asset('/logo/chat.png')}}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<br><br>
@endsection

