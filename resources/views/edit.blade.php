<head>
  <meta charset="utf-8" />
  <title>Conduit</title>
  <!-- Import Ionicon icons & Google Fonts our Bootstrap theme relies on -->
  <link
    href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"
    rel="stylesheet"
    type="text/css"
  />
  <link
    href="//fonts.googleapis.com/css?family=Titillium+Web:700|Source+Serif+Pro:400,700|Merriweather+Sans:400,700|Source+Sans+Pro:400,300,600,700,300italic,400italic,600italic,700italic"
    rel="stylesheet"
    type="text/css"
  />
  <!-- Import the custom Bootstrap 4 theme from our hosted CDN -->
  <link rel="stylesheet" href="//demo.productionready.io/main.css" />
</head>

<div class="editor-page">
  <div class="container page">
    <div class="row">
      <div class="col-md-10 offset-md-1 col-xs-12">
        <ul class="error-messages">
          <li>That title is required</li>
        </ul>

        <form method="POST" action="{{ route('articles.update', $article) }}">
        @csrf
        @method('PUT')

          <fieldset>
            <fieldset class="form-group">
              <input 
                type="text"
                name="title" 
                class="form-control form-control-lg" 
                placeholder="Article Title" 
                value="{{ $article->title }}"/>
            </fieldset>
            <fieldset class="form-group">
              <input 
                type="text" 
                class="form-control" 
                placeholder="What's this article about?" 
                value="{{ $article->sub_title }}"/>
            </fieldset>
            <fieldset class="form-group">
              <textarea
                name="body"
                class="form-control"
                rows="8"
                placeholder="Write your article (in markdown)"
              >{{ $article->body }}</textarea>
            </fieldset>
            <fieldset class="form-group">
              <input 
                type="text" 
                name="tags"
                class="form-control" 
                placeholder="Enter tags" />
              <div class="tag-list">
                <span class="tag-default tag-pill"> <i class="ion-close-round"></i>{{ $article->tags }}</span>
              </div>
            </fieldset>
            <button class="btn btn-lg pull-xs-right btn-primary" type="submit">
              Publish Article
            </button>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>