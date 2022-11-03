function Preloader() {
  var view = View.getInstance();

  var loadingPercentage;

  var imageSources;
  var soundSources;

  var that = this;

  this.init = function() {
    loadingPercentage = view.create('div');

    view.addClass(loadingPercentage, 'loading-percentage');
    view.setHTML(loadingPercentage, '0%');
    view.appendToBody(loadingPercentage);

    imageSources = {
      1: 'assets/Mario/images/back-btn.png',
      2: 'assets/Mario/images/bg.png',
      3: 'assets/Mario/images/bullet.png',
      4: 'assets/Mario/images/clear-map-btn.png',
      5: 'assets/Mario/images/coin.png',
      6: 'assets/Mario/images/delete-all-btn.png',
      7: 'assets/Mario/images/editor-btn.png',
      8: 'assets/Mario/images/elements.png',
      9: 'assets/Mario/images/enemies.png',
      10: 'assets/Mario/images/flag-pole.png',
      11: 'assets/Mario/images/flag.png',
      12: 'assets/Mario/images/start-screen.png',
      13: 'assets/Mario/images/grid-large-btn.png',
      14: 'assets/Mario/images/grid-medium-btn.png',
      15: 'assets/Mario/images/grid-small-btn.png',
      16: 'assets/Mario/images/grid.png',
      17: 'assets/Mario/images/lvl-size.png',
      18: 'assets/Mario/images/mario-head.png',
      19: 'assets/Mario/images/mario-sprites.png',
      20: 'assets/Mario/images/powerups.png',
      21: 'assets/Mario/images/save-map-btn.png',
      22: 'assets/Mario/images/saved-btn.png',
      23: 'assets/Mario/images/slider-left.png',
      24: 'assets/Mario/images/slider-right.png',
      25: 'assets/Mario/images/start-btn.png'
    };

    that.loadImages(imageSources);
  };

  this.loadImages = function(imageSources) {
    var images = {};
    var loadedImages = 0;
    var totalImages = 0;

    for (var key in imageSources) {
      totalImages++;
    }

    for (var key in imageSources) {
      images[key] = new Image();
      images[key].src = imageSources[key];

      images[key].onload = function() {
        loadedImages++;
        percentage = Math.floor(loadedImages * 100 / totalImages);

        view.setHTML(loadingPercentage, percentage + '%'); //displaying percentage

        if (loadedImages >= totalImages) {
          view.removeFromBody(loadingPercentage);
          that.initMainApp();
        }
      };
    }
  };

  this.initMainApp = function() {
    var marioMakerInstance = MarioMaker.getInstance();
    marioMakerInstance.init();
  };
}

window.onload = function() {
  var preloader = new Preloader();
  preloader.init();
};
