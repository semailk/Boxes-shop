@extends('layouts.main')
@section('content')
            <div class="page-header">
                <div class="page-header__container container">
                    <div class="page-header__breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.blade.php">Home</a>
                                    <svg class="breadcrumb-arrow" width="6px" height="9px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                    </svg>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="">Breadcrumb</a>
                                    <svg class="breadcrumb-arrow" width="6px" height="9px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                    </svg>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Post</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-9 col-xl-8">
                        <div class="block post post--layout--full">
                            <div class="post__header post-header post-header--layout--full">
                                <div class="post-header__categories">
                                    <a href="">Latest news</a>
                                </div>
                                <h1 class="post-header__title">Morbi Interdum Velit Quis Magna Placerat Lobortis Eget</h1>
                                <div class="post-header__meta">
                                    <div class="post-header__meta-item">By <a href="">Jessica Moore</a></div>
                                    <div class="post-header__meta-item"><a href="">November 30, 2018</a></div>
                                    <div class="post-header__meta-item"><a href="">4 Comments</a></div>
                                </div>
                            </div>
                            <div class="post__featured">
                                <a href="">
                                    <img src="images/posts/post-featured.jpg" alt="">
                                </a>
                            </div>
                            <div class="post__content typography  typography--expanded ">
                                <p>
                                    Vestibulum sagittis justo sit amet nisl semper, et pulvinar elit maximus. Morbi interdum velit quis magna placerat lobortis
                                    eget pharetra magna. Nulla tristique sollicitudin turpis, eget maximus risus faucibus non. Nulla vestibulum ipsum risus,
                                    vitae maximus nunc bibendum quis.
                                </p>
                                <p>
                                    raesent eu consequat nibh. Quisque <i>ullamcorper</i>, augue eu fringilla sodales, leo metus volutpat risus, at suscipit ipsum
                                    diam eget sem. Maecenas dictum elit in enim molestie, <a href="">vel sollicitudin erat ultricies</a>. Sed risus tellus, molestie finibus
                                    dui quis, suscipit consequat ex.
                                </p>
                                <blockquote>
                                    <p>
                                        Sed a dictum elit. In iaculis porttitor luctus. Maecenas ultricies dolor et semper placerat.
                                        Proin at lectus felis.
                                    </p>
                                    <p><cite>John Mcarthy</cite></p>
                                </blockquote>
                                <p>
                                    Vivamus in nisi at turpis rhoncus feugiat. Mauris scelerisque non ante et ultrices. Donec sit amet sem lobortis,
                                    ullamcorper felis at, finibus sem. Curabitur tincidunt neque nunc.
                                </p>
                                <h3>Nam Eget Blandit Diam</h3>
                                <p>
                                    Quisque semper magna eget libero maximus, a sollicitudin nunc hendrerit. Cras efficitur, ante vitae fringilla rutrum,
                                    mi tortor dapibus metus, in egestas metus erat sit amet orci. Ut faucibus non ante dapibus efficitur. Nam eget blandit
                                    diam, imperdiet condimentum neque. Donec risus nisi, aliquet a commodo ac, elementum vitae leo.
                                </p>
                                <p>
                                    Vestibulum sagittis justo sit amet nisl semper, et pulvinar elit maximus. Morbi interdum velit quis magna placerat
                                    lobortis eget pharetra magna.
                                </p>
                                <p>
                                    <strong>Nulla fringilla:</strong> <a href="#">Donec aliquet at felis et dignissim</a>
                                </p>
                                <figure>
                                    <a href="">
                                        <img src="images/posts/post-featured.jpg" alt="">
                                    </a>
                                    <figcaption>Nunc viverra, dui nec commodo dignissim, libero arcu.</figcaption>
                                </figure>
                                <p>
                                    Vestibulum non varius lectus. Cras vel elit id ligula laoreet imperdiet. Mauris quis laoreet velit.
                                    Suspendisse sed velit nec ante facilisis pharetra.
                                </p>
                                <p>
                                    Phasellus ut elit vestibulum, dignissim mi non, suscipit ex. Praesent eu consequat nibh. Quisque ullamcorper, augue
                                    eu fringilla sodales, leo metus volutpat risus, <a href="#">at suscipit ipsum diam eget sem</a>. Maecenas dictum elit in enim molestie,
                                    vel sollicitudin erat ultricies. Sed risus tellus, molestie finibus dui quis, suscipit consequat ex.
                                </p>
                                <hr>
                                <h2>Nunc Dapibus Varius Ligula</h2>
                                <p>
                                    Maecenas ultrices arcu ut feugiat semper. Praesent dictum tincidunt justo, ac tincidunt ante fermentum at. Vestibulum non
                                    varius lectus. Cras vel elit id ligula laoreet imperdiet. Mauris quis laoreet velit. Suspendisse sed velit nec ante
                                    facilisis pharetra. Duis vitae fermentum elit. Integer ac mattis elit.
                                </p>
                                <p>
                                    Mauris scelerisque non ante et ultrices. Donec sit amet sem lobortis:
                                </p>
                                <ol>
                                    <li>Duis <strong>finibus imperdiet ultricies</strong>. Donec vel pretium turpis. In auctor euismod posuere.</li>
                                    <li>Praesent dictum tincidunt justo, ac tincidunt ante fermentum at. Vestibulum non varius lectus. Cras vel elit id ligula laoreet imperdiet.</li>
                                    <li><strong>In iaculis porttitor luctus</strong>. Maecenas ultricies dolor et semper placerat. Proin at lectus felis. Quisque dapibus auctor justo id dictum.</li>
                                </ol>
                                <p>
                                    Ut faucibus non ante dapibus efficitur. Nam eget blandit diam, imperdiet condimentum neque. Donec risus nisi, aliquet a
                                    commodo ac, elementum vitae leo.
                                </p>
                            </div>
                            <div class="post__footer">
                                <div class="post__tags-share-links">
                                    <div class="post__tags tags">
                                        <div class="tags__list">
                                            <a href="">Promotion</a>
                                            <a href="">Power Tool</a>
                                            <a href="">Wrench</a>
                                            <a href="">Electrodes</a>
                                        </div>
                                    </div>
                                    <div class="post__share-links share-links">
                                        <ul class="share-links__list">
                                            <li class="share-links__item share-links__item--type--like"><a href="">Like</a></li>
                                            <li class="share-links__item share-links__item--type--tweet"><a href="">Tweet</a></li>
                                            <li class="share-links__item share-links__item--type--pin"><a href="">Pin It</a></li>
                                            <li class="share-links__item share-links__item--type--counter"><a href="">4K</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="post-author">
                                    <div class="post-author__avatar">
                                        <a href=""><img src="images/avatars/avatar-1.jpg" alt=""></a>
                                    </div>
                                    <div class="post-author__info">
                                        <div class="post-author__name">
                                            <a href="">Jessica Moore</a>
                                        </div>
                                        <div class="post-author__about">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur suscipit suscipit mi, non
                                            tempor nulla finibus eget. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <section class="post__section">
                                <h4 class="post__section-title">Related Posts</h4>
                                <div class="related-posts">
                                    <div class="related-posts__list">
                                        <div class="related-posts__item post-card post-card--layout--related">
                                            <div class="post-card__image">
                                                <a href="">
                                                    <img src="images/posts/post-1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-card__info">
                                                <div class="post-card__name">
                                                    <a href="">Philosophy That Addresses Topics Such As Goodness</a>
                                                </div>
                                                <div class="post-card__date">October 19, 2019</div>
                                            </div>
                                        </div>
                                        <div class="related-posts__item post-card post-card--layout--related">
                                            <div class="post-card__image">
                                                <a href="">
                                                    <img src="images/posts/post-2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-card__info">
                                                <div class="post-card__name">
                                                    <a href="">Logic Is The Study Of Reasoning And Argument Part 2</a>
                                                </div>
                                                <div class="post-card__date">September 5, 2019</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="post__section">
                                <h4 class="post__section-title">Comments (4)</h4>
                                <ol class="comments-list comments-list--level--0">
                                    <li class="comments-list__item">
                                        <div class="comment">
                                            <div class="comment__avatar">
                                                <a href=""><img src="images/avatars/avatar-1.jpg" alt=""></a>
                                            </div>
                                            <div class="comment__content">
                                                <div class="comment__header">
                                                    <div class="comment__author">
                                                        <a href="">Jessica Moore</a>
                                                    </div>
                                                    <div class="comment__reply">
                                                        <button type="button" class="btn btn-xs btn-light">Reply</button>
                                                    </div>
                                                </div>
                                                <div class="comment__text">Aliquam ullamcorper elementum sagittis. Etiam lacus lacus, mollis in mattis in, vehicula eu nulla. Nulla nec tellus pellentesque.</div>
                                                <div class="comment__date">November 30, 2018</div>
                                            </div>
                                        </div>
                                        <div class="comment-list__children">
                                            <ol class="comments-list comments-list--level--1">
                                                <li class="comments-list__item">
                                                    <div class="comment">
                                                        <div class="comment__avatar">
                                                            <a href=""><img src="images/avatars/avatar-2.jpg" alt=""></a>
                                                        </div>
                                                        <div class="comment__content">
                                                            <div class="comment__header">
                                                                <div class="comment__author">
                                                                    <a href="">Adam Taylor</a>
                                                                </div>
                                                                <div class="comment__reply">
                                                                    <button type="button" class="btn btn-xs btn-light">Reply</button>
                                                                </div>
                                                            </div>
                                                            <div class="comment__text">Ut vitae finibus nisl, suscipit porttitor urna. Integer efficitur efficitur velit non pulvinar. Aliquam blandit volutpat arcu vel tristique. Integer commodo ligula id augue tincidunt faucibus.</div>
                                                            <div class="comment__date">December 4, 2018</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="comments-list__item">
                                                    <div class="comment">
                                                        <div class="comment__avatar">
                                                            <a href=""><img src="images/avatars/avatar-3.jpg" alt=""></a>
                                                        </div>
                                                        <div class="comment__content">
                                                            <div class="comment__header">
                                                                <div class="comment__author">
                                                                    <a href="">Helena Garcia</a>
                                                                </div>
                                                                <div class="comment__reply">
                                                                    <button type="button" class="btn btn-xs btn-light">Reply</button>
                                                                </div>
                                                            </div>
                                                            <div class="comment__text">Suspendisse dignissim luctus metus vitae aliquam. Vestibulum sem odio, ullamcorper a imperdiet a, tincidunt sed lacus. Sed magna felis, consequat a erat ut, rutrum finibus odio.</div>
                                                            <div class="comment__date">December 12, 2018</div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>
                                        </div>
                                    </li>
                                    <li class="comments-list__item">
                                        <div class="comment">
                                            <div class="comment__avatar">
                                                <a href=""><img src="images/avatars/avatar-4.jpg" alt=""></a>
                                            </div>
                                            <div class="comment__content">
                                                <div class="comment__header">
                                                    <div class="comment__author">
                                                        <a href="">Ryan Ford</a>
                                                    </div>
                                                    <div class="comment__reply">
                                                        <button type="button" class="btn btn-xs btn-light">Reply</button>
                                                    </div>
                                                </div>
                                                <div class="comment__text">Nullam at varius sapien. Sed sit amet condimentum elit.</div>
                                                <div class="comment__date">December 5, 2018</div>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </section>
                            <section class="post__section">
                                <h4 class="post__section-title">Write A Comment</h4>
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="comment-first-name">First Name</label>
                                            <input type="text" class="form-control" id="comment-first-name" placeholder="First Name">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="comment-last-name">Last Name</label>
                                            <input type="text" class="form-control" id="comment-last-name" placeholder="Last Name">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="comment-email">Email Address</label>
                                            <input type="email" class="form-control" id="comment-email" placeholder="Email Address">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="comment-content">Comment</label>
                                        <textarea class="form-control" id="comment-content" rows="6"></textarea>
                                    </div>
                                    <div class="form-group mt-4">
                                        <button type="submit" class="btn btn-primary btn-lg">Post Comment</button>
                                    </div>
                                </form>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- site__body / end -->
        <!-- site__footer -->
@endsection
