@props(['value' => 0.5])
<svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
      <symbol id="icon-star" viewBox="0 0 26 28">
        <path d="M26 10.109c0 0.281-0.203 0.547-0.406 0.75l-5.672 5.531 1.344 7.812c0.016 0.109 0.016 0.203 0.016 0.313 0 0.406-0.187 0.781-0.641 0.781-0.219 0-0.438-0.078-0.625-0.187l-7.016-3.687-7.016 3.687c-0.203 0.109-0.406 0.187-0.625 0.187-0.453 0-0.656-0.375-0.656-0.781 0-0.109 0.016-0.203 0.031-0.313l1.344-7.812-5.688-5.531c-0.187-0.203-0.391-0.469-0.391-0.75 0-0.469 0.484-0.656 0.875-0.719l7.844-1.141 3.516-7.109c0.141-0.297 0.406-0.641 0.766-0.641s0.625 0.344 0.766 0.641l3.516 7.109 7.844 1.141c0.375 0.063 0.875 0.25 0.875 0.719z"></path>
      </symbol>
      <symbol id="icon-star-half" viewBox="0 0 13 28">
        <path d="M13 0.5v20.922l-7.016 3.687c-0.203 0.109-0.406 0.187-0.625 0.187-0.453 0-0.656-0.375-0.656-0.781 0-0.109 0.016-0.203 0.031-0.313l1.344-7.812-5.688-5.531c-0.187-0.203-0.391-0.469-0.391-0.75 0-0.469 0.484-0.656 0.875-0.719l7.844-1.141 3.516-7.109c0.141-0.297 0.406-0.641 0.766-0.641v0z"></path>
      </symbol>
    </defs>
  </svg>
  <div class="comment-stars justify-end">

    <input class="comment-stars-input" type="radio" name="rating" {{ $value==5?'checked':''  }}  value="5" id="rating-5">
    <label class="comment-stars-view" for="rating-5"><svg class="icon icon-star">
        <use xlink:href="#icon-star"></use>
      </svg></label>
    <input class="comment-stars-input" type="radio" name="rating" {{ $value==4.5?'checked':''  }}   value="4.5" id="rating-4.5" > <label class="comment-stars-view is-half" for="rating-4.5"><svg class="icon icon-star-half">
        <use xlink:href="#icon-star-half"></use>
      </svg></label>
    <input class="comment-stars-input" type="radio" name="rating" {{ $value==4?'checked':''  }}   value="4" id="rating-4"> <label class="comment-stars-view" for="rating-4"><svg class="icon icon-star">
        <use xlink:href="#icon-star"></use>
      </svg></label>
    <input class="comment-stars-input" type="radio" name="rating" {{ $value==3.5?'checked':''  }}  value="3.5" id="rating-3.5"> <label class="comment-stars-view is-half" for="rating-3.5"><svg class="icon icon-star-half">
        <use xlink:href="#icon-star-half"></use>
      </svg></label>
    <input class="comment-stars-input" type="radio" name="rating" {{ $value==3?'checked':''  }}  value="3" id="rating-3"> <label class="comment-stars-view" for="rating-3"><svg class="icon icon-star">
        <use xlink:href="#icon-star"></use>
      </svg></label>
    <input class="comment-stars-input" type="radio" name="rating" {{ $value==2.5?'checked':''  }}  value="2.5" id="rating-2.5"> <label class="comment-stars-view is-half" for="rating-2.5"><svg class="icon icon-star-half">
        <use xlink:href="#icon-star-half"></use>
      </svg></label>
    <input class="comment-stars-input" type="radio" name="rating" {{ $value==2?'checked':''  }}   value="2" id="rating-2"> <label class="comment-stars-view" for="rating-2"><svg class="icon icon-star">
        <use xlink:href="#icon-star"></use>
      </svg></label>
    <input class="comment-stars-input" type="radio" name="rating" {{ $value==1.5?'checked':''  }}   value="1.5" id="rating-1.5"> <label class="comment-stars-view is-half" for="rating-1.5"><svg class="icon icon-star-half">
        <use xlink:href="#icon-star-half"></use>
      </svg></label>
    <input class="comment-stars-input" type="radio" name="rating" {{ $value==1?'checked':''  }}  value="1" id="rating-1"> <label class="comment-stars-view" for="rating-1"><svg class="icon icon-star">
        <use xlink:href="#icon-star"></use>
      </svg></label>
    <input class="comment-stars-input" type="radio" name="rating"  {{ $value==0.5?'checked':''  }}  value="0.5" id="rating-0.5"> <label class="comment-stars-view is-half" for="rating-0.5"><svg class="icon icon-star-half">
        <use xlink:href="#icon-star-half"></use>
      </svg></label>
  </div>
