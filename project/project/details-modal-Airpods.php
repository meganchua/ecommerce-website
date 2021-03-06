<div class ="modal fade details-3" id ="details-3" tableindex ="-1" role ="dialog" aria-labelledby="details-3" aria-hidden ="true">
  <div class ="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class ="modal-title text-center">Airpods</h4>
      </div>
      <div class ="modal-body">
        <div class ="container-fluid">
          <div class ="row">
            <div class ="col-sm-6">
              <div class ="center-block">
                <img src ="images/airpods.jfif" alt ="Airpods" id ="images" class = "details img-responsive"/>
              </div>
            </div>
            <div class = "col-sm-6">
              <h4>Details</h4>
              <p>Block out the haters with these new Airpods!</p>
              <hr />
              <p>Price: $6.00</p>
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
