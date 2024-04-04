
  
  <!-- Button to trigger modal -->
  

  <!-- Modal -->
  <div class="modal fade" id="gateModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="imageModalLabel" style="color:black">Gate</h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div id="imageDetails">
            <div class="login-signup-container">
                <form action="action.php" method="POST">
                <input type="hidden" name="user-type" value="gate">
                <div class="form-group">
                        <label for="gate-num" style="color:black">Gate Number</label>
                        <input type="text" name="gate-num" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="gate-pass" style="color:black">Password</label>
                        <input type="password" name="gate-pass" class="form-control" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
                <!-- <p class="text-center mt-3" style="color:black;font-size:20px">Don't have an account? <a href="signup.php">Sign up</a></p> -->
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <!-- <button><a href="https://drive.google.com/drive/folders/1xU8LfCYuQzd1U9j2wH39TQdoOBZ_GExJ?usp=sharing" target="_blank">More</a></button> -->
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

