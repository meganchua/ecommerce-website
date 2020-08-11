<div class ="modal fade details-5" id ="details-5" tableindex ="-1" role ="dialog" aria-labelledby="details-5" aria-hidden ="true">
  <div class ="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class ="modal-title text-center">Sorority Girl Starter Pack</h4>
      </div>
      <div class ="modal-body">
        <div class ="container-fluid">
          <div class ="row">
            <div class ="col-sm-6">
              <div class ="center-block">
                <img src ="images/sororitygirl.jpg" alt ="Sorority Girl Starter Pack" id ="images" class = "details img-responsive"/>
              </div>
            </div>
            <div class = "col-sm-6">
              <h4>Details</h4>
              <p>Need help fitting in? Here is the SDSU girl starter pack!</p>
              <hr />
              <p>Price: $100.00</p>
              <form action="add_cart.php" method="post">
                <div class="form-group">
                  <div class="col-xs-3">
                    <label for="quantity" id ="quantity-label">Quantity:</label>
                    <input type = "text" class="form-control" id="quantity" name ="quantity" />
                  </div><br /><br />
                  <div class ="form-group">
                    <label for="size">Size:</label>
                    <select name="size" id="size" class ="form-control">
                      <option value=""></option>
                      <option value="S">S</option>
                      <option value="M">M</option>
                      <option value="L">L</option>
                      <option value="XL">XL</option>
                    </select>
                  </div>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
    <div class ="modal-footer">
    <button class ="btn btn-default" data-dismiss="modal">Close</button>
    <button class ="btn btn-warning" type="submit"><span class ="glyphicon glyphicon-shopping-cart"></span>Add To Cart</button>
  </div>
  </div>
</div>
</div>
