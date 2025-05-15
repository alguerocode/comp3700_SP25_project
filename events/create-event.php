        <form class="d-flex needs-validation" id="create-event-form" class="needs-validation" novalidate
          method="post" action="/events/explore.php" role="search">
          <!-- Button trigger modal -->
          <button type="button" style="border: 1px solid #6518ff; color:#6518ff ;" class="btn m-1"
            data-bs-toggle="modal" data-bs-target="#exampleModal">
            Create New Event
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Create New Website</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                      required>
                    <div class="invalid-feedback">
                      please enter a valid title between 3 and 26 characters long
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">About</label>
                    <input type="text" name="about" class="form-control" id="exampleInputabout1" required>
                    <div class="invalid-feedback">
                      please enter a valid description of the event
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Image URL</label>
                    <input type="url" name="img-url" class="form-control" id="exampleInputurl1" required>
                    <div class="invalid-feedback">
                      please enter a valid url
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Maximum Audience</label>
                    <input type="text" name="max-aud" class="form-control" id="exampleInputMaxAud1" required>
                    <div class="invalid-feedback">
                      please enter a valid number between 1 and 999999
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Event Time</label>
                    <input type="date" name="time" class="form-control" id="eventTime1" required>
                    <div class="invalid-feedback">
                      please select a valid date
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Location</label>
                    <input type="text" name="location" class="form-control" id="exampleLocation" required>
                    <div class="invalid-feedback">
                      please enter a valid location
                    </div>
                  </div>


                </div>
                <div class="modal-footer">
                  <button type="button" id="closemodal" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                  <!-- removed the "create-event" id to stop the form from closing when submitting -->
                  <button type="submit" id="create-event" class="btn btn-primary">Create</button> <!-- Changed this to sumbit -->
                </div>
              </div>

            </div>

          </div>
          <a class="btn m-1" href="/auth/sign-in.html" style="border: 1px solid #6518ff; color:#6518ff ;">Register</a>
          <a class="btn  m-1" href="/auth/login.html" style="background-color: #6518ff; color: white;">Login</a>
        </form>