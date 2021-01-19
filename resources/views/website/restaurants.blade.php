@extends('website.layouts.front')

@section('content')   
<style>
    /* ----- Variables ----- */
  $color-primary: #4c4c4c;
  $color-secondary: #a6a6a6;
  $color-highlight: #ff3f40;

  /* ----- Global ----- */
  * {
    box-sizing: border-box;
  }

  h3 {
    font-size: 0.7em;
    letter-spacing: 1.2px;
    color: $color-secondary;
  }

  img {
        max-width: 100%;
        filter: drop-shadow(1px 1px 3px $color-secondary);
      }

  /* ----- Product Section ----- */
  .product {
    display: grid;
    grid-template-columns: 0.9fr 1fr;
    margin: auto;
    padding: 2.5em 0;
    min-width: 600px;
    background-color: white;
    border-radius: 5px;
  }

  /* ----- Photo Section ----- */
  .product__photo {
    position: relative;
  }

  .photo-container {
    position: absolute;
    left: -2.5em;
    /*top: 5.5em;*/
    display: grid;
    grid-template-rows: 1fr;
    width: 100%;
    border-radius: 6px;
    box-shadow: 4px 4px 25px -2px rgba(0, 0, 0, 0.3);
  }

  .photo-main {
    border-radius: 6px 6px 0 0;
    background-color: none;

    .controls {
      display: flex;
      justify-content: space-between;
      padding: 0.8em;
      color: #fff;

      i {
        cursor: pointer;
      }
    }

    img {
      position: absolute;
      left: -3.5em;
      top: 2em;
      max-width: 110%;
      filter: saturate(150%) contrast(120%) hue-rotate(10deg)
        drop-shadow(1px 20px 10px rgba(0, 0, 0, 0.3));
    }
  }

  /* ----- Informations Section ----- */
  .product__info {
    padding: 0.8em 0;
  }

  .title {
    h1 {
      margin-bottom: 0.1em;
      color: $color-primary;
      font-size: 1.5em;
      font-weight: 900;
    }

    span {
      font-size: 0.7em;
      color: $color-secondary;
    }
  }

  .price {
    margin: 1.5em 0;
    color: $color-highlight;
    font-size: 1.2em;

    span {
      padding-left: 0.15em;
      font-size: 2.9em;
    }
  }


  .description {
    clear: left;
    margin: 2em 0;

    h3 {
      margin-bottom: 1em;
    }

    ul {
      font-size: 0.8em;
      list-style: disc;
      margin-left: 1em;
    }

    li {
      text-indent: -0.6em;
      margin-bottom: 0.5em;
    }
  }

  .buy--btn {
    padding: 1.5em 3.1em;
    border: none;
    border-radius: 7px;
    font-size: 0.8em;
    font-weight: 700;
    letter-spacing: 1.3px;
    color: #fff;
    background-color: #ff6138;
    box-shadow: 2px 2px 25px -7px $color-primary;
    cursor: pointer;
    transition: all ease-in-out .2s;
    border: 1px solid #ff6138;
  }
  .buy--btn:hover{
    color: #ff6138;
    background-color: #fff;
    border: 1px solid #ff6138;
  }
</style> 
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/food/food3.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-end">
            <div class="col-md-10 col-sm-12 ftco-animate mb-4">
              <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Restaurant</span></p>
              <h1 class="mb-3">DISCOVER EGYPTIAN FOODS</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Menu</span>
            <h2>Restaurant &amp; Cafe</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 dish-menu">

            <div class="nav nav-pills justify-content-center ftco-animate" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link py-3 px-4 active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><span class="flaticon-tray"></span> Main</a>
              {{-- <a class="nav-link py-3 px-4" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><span class="flaticon-beer"></span> Dessert</a>
              <a class="nav-link py-3 px-4" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><span class="flaticon-cheers"></span> Drinks</a> --}}
            </div>

            <div class="tab-content py-5" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div class="row">
                  @if ($foods->isEmpty())
                      <div class="alert alert-danger">
                        No results found!
                      </div>
                  @else
                  @foreach ($foods as $item)
                  <div class="col-lg-6">
                    <a href="javascript::void();" data-toggle="modal" data-target="#itemModal{{$item->id}}">
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url({{$item->getImage()}});"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>{{ $item->food_name }}</h3>
                          <p>
                            {{ $item->notes }}
                          </p>
                        </div>
                        <div class="one-forth">
                          <span class="price">${{$item->cost}}</span>
                        </div>
                      </div>
                    </div>
                  </a>
                  </div>
                  <!-- Modal -->
<div class="modal fade" id="itemModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <section class="product">
        <div class="product__photo">
          <div class="photo-container">
            <div class="photo-main">
              <img src="{{ $item->getImage() }}" alt="green apple slice">
            </div>
          </div>
        </div>
        <div class="product__info">
          <div class="title">
            <h1>{{ $item->food_name }}</h1>
            <span>CODE: {{ $item->food_no }}</span>
          </div>
          <div class="price">
            $ <span>{{ $item->cost }}</span>
          </div>
          <div class="description">
            <p class="features">
              <span class="d-block mb-2"><i class="icon-check mr-2"></i>Restaurant name:{{ $item->restaurant_name }} </span>
              <span class="d-block mb-2"><i class="icon-check mr-2"></i>Restaurant Number:{{$item->rest_no}} </span>
              <span class="d-block mb-2"><i class="icon-check mr-2"></i>Address:{{$item->address}} </span>
              <span class="d-block mb-2"><i class="icon-check mr-2"></i>description:{{$item->notes}} </span>
            </p>
          </div>
          <form action="{{ url('/reserve-food') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $item->id }}">
            <button class="buy--btn">Reserve Now</button>
          </form>
        </div>
      </section>
            
    </div>
  </div>
</div>
                  @endforeach
                  @endif

                </div>
              </div><!-- END -->
            </div>
          </div>
        </div>
      </div>
    </section>
  
@endsection