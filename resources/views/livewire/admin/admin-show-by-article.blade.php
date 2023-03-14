<div>
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="card mb-4">
            <div class="card-header">Article</div>
            <div class="card-body">
              <p>{{ $article->title }}</p>
              <table class="table">
                <thead>
                  <tr>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <p> Title</p>
                    </td>
                    <td><span class="h1">{{ $article->title }}</span></td>
                  </tr>
                  <tr>
                    <td>
                      <p>Content</p>
                    </td>
                    <td><p>{{ $article->content }}</p></td>
                  </tr>
                  <tr>
                    <td>
                      <p>Author</p>
                    </td>
                    <td>{{ $article->user->name }}</td>
                  </tr>
                  <tr>
                    <td>
                      <p>Date</p>
                    </td>
                    <td>{{ $article->created_at }}</td>
                  </tr>
                  <tr>
                    <td>
                      <p>Status</p>
                    </td>
                    <td>{{ $article->status }}</td>
                  </tr>
                 
                </tbody>
              </table>
            </div>
          </div>

        </div>
      </div>
</div>
