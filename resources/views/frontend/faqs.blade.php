@extends('layouts/app')
@section('content')

<!-- our FAQ's -->
<div class="container-fluid">
    <div class="faq-wrapper py-4">
      <h2 class="text-center py-3 fa-4x" id="text-color">Our FAQs</h2>
      <div class="faq-design p-5">
        <h4 class="text-center fa-2x fw-bold text-white" >What makes a good tutor?</h4>
        <p>Lorem ipsum dolor sit amet. Est magni cupiditate ad laboriosam vitae a dicta nisi qui corrupti laborum non repellat molestiae. Sit eaque quam cum itaque dolores vel culpa maiores.</p>
        <p>
          Aut architecto earum ut quidem assumenda ad dicta harum aut voluptatem iure qui consequuntur nihil et internos rerum eum velit eaque. Vel optio vitae et ipsa impedit aut dolorum reiciendis.Lorem ipsum dolor sit amet. Est magni cupiditate ad laboriosam vitae a dicta nisi qui corrupti laborum non repellat molestiae. Sit eaque quam cum itaque dolores vel culpa maiores.
          Aut architecto earum ut quidem assumenda ad dicta harum aut voluptatem iure qui consequuntur nihil et internos rerum eum velit eaque. Vel optio vitae et ipsa impedit aut dolorum reiciendis.Lorem  dolor sit amet. Est magni cupiditate ad laboriosam vitae a dicta nisi qui corrupti laborum non repellat molestiae. Sit eaque quam cum itaque dolores vel culpa maiores.
        </p>
        <p>
          Aut architecto earum ut quidem assumenda ad dicta harum aut voluptatem iure qui consequuntur nihil et internos rerum eum velit eaque. Vel optio vitae et ipsa impedit aut dolorum reiciendis.
        </p>
        <div>

          <div class="accordion accordion-flush my-4 me-3" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  What Makes a Good Tutor?
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Lorem ipsum dolor sit amet. Est magni cupiditate ad laboriosam vitae a dicta nisi qui corrupti laborum non repellat molestiae. Sit eaque quam cum itaque dolores vel culpa maiores.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  Why is Online Tutoring Important?
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  How much does a Tutor Cost?
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapseThree">
                  What are the Benefits of Online Tutoring?
                </button>
              </h2>
              <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingfour">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapseThree">
                  What are the Benefits of Online Tutoring?
                </button>
              </h2>
              <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div> 
  <!-- FAQs Sec end  -->


  <!-- Find tutor section -->
  <div class="container-fluid px-0">
    <div class="container text-center py-5 mb-5">
      <h3 class="fa-2x fw-bold pb-4" id="text-color">Book a free meeting with a tutor today</h3>
      <a href="" id="find-tutor">Find a Tutor</a>
    </div>
  </div>
  <!-- Find tutor section end--

@endsection