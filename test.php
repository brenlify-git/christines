<div class="row">
        <div class="col-lg-12">


          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Insert Book Details</h5>

              <!-- Multi Columns Form -->
              <form class="row g-3" action="insert-librarian.php" method="post">

                <div class="col-4">
                  <label for="inputAddress5" class="form-label">Series</label>
                  <input type="number" class="form-control" id="inputAddres5s" name="Series" placeholder="2014"
                    required>
                </div>

                <div class="col-4">
                  <label for="inputAddress5" class="form-label">Price</label>
                  <input type="text" min="1" step="any" pattern="^[0-9]{3,}.[0-9]{2}" class="form-control" id="inputAddres5s"  name="Price"
                    placeholder="567.00" required>
                </div>




                <div class="text-right">
                  <button type="submit" class="btn btn-primary" >+ Add Book</button>
                </div>
              </form><!-- End Multi Columns Form -->

            </div>
          </div>

        </div>


      </div>