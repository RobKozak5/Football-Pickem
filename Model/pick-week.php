  <!-- CSS Sytle for button grid layout -->

<style>
/* quick reset so all our padding is the right size */
* {
  box-sizing: border-box;
}

/* add some spacing */
body          {
  background: #F6F6F6;
  padding-bottom: 30px;
  padding-top: 30px;
}

/* limit the width and center */
.week   {
  max-width: 400px;
  margin: 0 auto;
  border: 2px solid #111;
  border-radius: 5px;
}
.week-button  {
  background: #9f1224; /* light background with opacity 50% */
  border: 1px solid #111; /* black border */
  padding: 10px;
  color: #EEE; /* white text */
  border-radius: 5px; /* rounded corners */
  font-size: 22px; /* larger fonts */
  cursor: pointer; /* make it look clickable */
}
.week input   {
  background: none;
  border: none;
  box-shadow: none;
  outline: none;
  padding: 10px;
  width: 100%;
  border-bottom: 2px solid #111;
  color: #9f1224;
  text-align: right;
  font-size: 40px;
  border-radius: 0;
}
.week-buttons {
  /* small spacing within our container */
  padding: 20px;
  /* the grid stuff! */
  display: grid;
  /* create 4 columns */
  grid-template-columns: 1fr 1fr 1fr 1fr;
  grid-gap: 15px;
}
.week-button:hover {
  background-color: #022c68;
}
</style>

<!-- Week selector modal -->              
<div class="modal fade" id="buttonGrid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Select A Week</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body mx-3">
            <!-- Testing button grid -->
            <div class="week-buttons">
              <form action="./Model/game-selector-template.php?week=1" method="post" id="week" value="1">
                <button class="week-button">Week 1</button>
              </form>  
              <button class="week-button">Week 2</button>
              <button class="week-button">Week 3</button>
              <button class="week-button">Week 4</button>
              <button class="week-button">Week 5</button>
              <button class="week-button">Week 6</button>
              <button class="week-button">Week 7</button>
              <button class="week-button">Week 8</button>
              <button class="week-button">Week 9</button>
              <button class="week-button">Week 10</button>
              <button class="week-button">Week 11</button>
              <button class="week-button">Week 12</button>
              <button class="week-button">Week 13</button>
              <button class="week-button">Week 14</button>
              <button class="week-button">Week 15</button>
              <button class="week-button">Week 16</button>
              <button class="week-button">Week 17</button>
            </div>
          </div>
        </div>
      </div>
  </div>