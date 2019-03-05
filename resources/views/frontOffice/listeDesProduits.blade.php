@extends('layout/public_layout')

@section('title', 'Produits')

@section('content')
      <!-- CONTAINER ARTICLES -->
      <div class="container-articles">
         <h2>Catalogue</h2>
         <!-- Formulaire appelle le programme panier.php pour lui soumettre les cases cochées -->
            <form method = "POST" action = "panier.php"> 

               <!-- Affiche tous les articles contenuent dans le tableau -->
               @foreach ($products as $product)
            
                  <!-- DEBUT Affiche 1 article -->
                  <div class="container-article">

                     <!-- Affiche l'image de l'article -->
                     <div class="container-left">       		
                      {{$product->NAME}}
                     <a href="{{route('ficheProduit', ['id'=>$product->NAME])}}">
                      <img src="{{$product->IMAGE}}" alt="vegetables-images" class="image">
                      </a>
                     </div>
                     
                     <div class="container-right">
                        <!-- Affiche le nom et le prix de l'article -->
                        {{$product->PRICE}}cents
                        
                        
                        <!-- Quantité -->
                        <input type="number" name="quantity" value="1" min="0" max="10" required/>

                        <!-- Case à cocher -->
                        <label for="case">Ajouter au panier</label>
                        <input type="checkbox" name="add_to_basket[]" value="#">
                     </div>
                  </div>

                  <!-- FIN Affiche 1 article -->
                  
               @endforeach

            <!-- Envoie du formulaire -->
            {{-- <button type="button" class="btn btn-secondary btn-lg" value="to_order">Commander</button> --}}
            <button type="submit" value="to_order">Commander</button>
            </form>
      </div>


      {{-- <div class="container">
            <div class="card-deck mb-3 text-center">
              <div class="card mb-4 shadow-sm">
                <div class="card-body">
                  <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
                  <ul class="list-unstyled mt-3 mb-4">
                    <li>10 users included</li>
                    <li>2 GB of storage</li>
                    <li>Email support</li>
                    <li>Help center access</li>
                  </ul>
                  <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
                </div>
              </div>
              <div class="card mb-4 shadow-sm">
                <div class="card-body">
                  <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
                  <ul class="list-unstyled mt-3 mb-4">
                    <li>20 users included</li>
                    <li>10 GB of storage</li>
                    <li>Priority email support</li>
                    <li>Help center access</li>
                  </ul>
                  <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
                </div>
              </div>
              <div class="card mb-4 shadow-sm">
                <div class="card-body">
                  <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1>
                  <ul class="list-unstyled mt-3 mb-4">
                    <li>30 users included</li>
                    <li>15 GB of storage</li>
                    <li>Phone and email support</li>
                    <li>Help center access</li>
                  </ul>
                  <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
                </div>
              </div>
            </div>
          
            <footer class="pt-4 my-md-5 pt-md-5 border-top">
              <div class="row">
                <div class="col-12 col-md">
                  <img class="mb-2" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
                  <small class="d-block mb-3 text-muted">© 2017-2019</small>
                </div>
                <div class="col-6 col-md">
                  <h5>Features</h5>
                  <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Cool stuff</a></li>
                    <li><a class="text-muted" href="#">Random feature</a></li>
                    <li><a class="text-muted" href="#">Team feature</a></li>
                    <li><a class="text-muted" href="#">Stuff for developers</a></li>
                    <li><a class="text-muted" href="#">Another one</a></li>
                    <li><a class="text-muted" href="#">Last time</a></li>
                  </ul>
                </div>
                <div class="col-6 col-md">
                  <h5>Resources</h5>
                  <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Resource</a></li>
                    <li><a class="text-muted" href="#">Resource name</a></li>
                    <li><a class="text-muted" href="#">Another resource</a></li>
                    <li><a class="text-muted" href="#">Final resource</a></li>
                  </ul>
                </div>
                <div class="col-6 col-md">
                  <h5>About</h5>
                  <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Team</a></li>
                    <li><a class="text-muted" href="#">Locations</a></li>
                    <li><a class="text-muted" href="#">Privacy</a></li>
                    <li><a class="text-muted" href="#">Terms</a></li>
                  </ul>
                </div>
              </div>
            </footer>
          </div> --}}

@endsection