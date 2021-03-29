<?php require_once "templates/header.php"; ?>
<style>
.content {
  padding: 20px;
  background-color: #fff;
}
</style>
<div class="container">
  <div class="row mt-3">
    <div class="col-3">
      <?php require_once "templates/sidebar.php"; ?>
    </div>
    <div class="col-9 content">
      <!-- Post Section -->
      <div>
        <form action="#" method="post">
          <div class="form-floating">
            <textarea 
              class="form-control"
              placeholder="What happend ?"
              id="status"></textarea>
            <label for="status">What happend ?</label>
          </div>
          <div class="d-grid mt-1">
            <button type="submit" class="btn btn-primary">Post</button>
          </div>
        </form>
      </div>
      <!-- End Post Section -->
      <!-- Status Section -->
      <div class="mt-3">
        <div class="card mb-4">
          <div class="card-body">
            <div class="card-title">
              <div class="row">
                <div class="col-1">
                  <img src="https://th.jobsdb.com/en-th/cms/employer/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png" width="50" />
                </div>
                <div class="col">
                  <figure>
                    <blockquote class="blockquote">
                      Kevin Develop
                    </blockquote>
                    <figcaption class="blockquote-footer">
                      post time <br /> 
                      <a href="#">edit</a>
                      <a href="#" class="link-danger">delete</a>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
            <div class="card-text">
              content
            </div>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <div class="row">
                <div class="col-1">
                  <img src="https://th.jobsdb.com/en-th/cms/employer/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png" width="50" />
                </div>
                <div class="col">
                    <div>
                      <b>Kevin Develop</b>
                    </div>
                    <div>
                      comment content
                    </div>
                    <div>
                      <a href="#">edit</a>
                      <a href="#" class="link-danger">delete</a>
                    </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-1">
                  <img src="https://th.jobsdb.com/en-th/cms/employer/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png" width="50" />
                </div>
                <div class="col">
                  <div>
                    <b>Kevin Develop</b>
                  </div>
                  <div>
                    comment content
                  </div>
                  <div>
                    <a href="#">edit</a>
                    <a href="#" class="link-danger">delete</a>
                  </div>
                </div>
              </div>
            </li>
          </ul>
          <div class="card-body">
            <form action="#" method="post">
              <input class="form-control" type="text" placeholder="comment"/>
            </form>
          </div>
        </div>
      </div>
      <!-- End Status Section -->
    </div>
  </div>
</div>
<?php require_once "templates/footer.php"; ?>