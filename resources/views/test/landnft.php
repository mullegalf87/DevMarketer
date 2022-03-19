<style>

    
    img {
        float: left;
        width:  100px;
        height: 100px;
        object-fit: cover;
    }
    
</style>

<div class="row col-md-12 m-0 p-0">
    <div id="drag-items" class="col-md-3 border-line p-0 m-0" style="background-color: #f0f0f0;">
        <div class="d-flex flex-wrap text-center">
            <img id="image_1" class="" style="width: 100px; height: 100px;" src="test_repo/img/9/1.jpg" draggable="true" />
            <img id="image_2" class="" style="width: 100px; height: 100px;" src="test_repo/img/9/2.jpg" draggable="true" />  
            <img id="image_3" class="" src="https://www.minecraft.net/content/dam/games/minecraft/screenshots/trial-hero-image-golem.png" draggable="true" />
        </div>
    </div>
    <div id="container" class="col-md-9 border-line p-0"></div>
</div>

<script>
    var width = window.innerWidth-$("#drag-items").innerWidth();
    var height = window.innerHeight-$(".navbar").innerHeight();
    
    var stage = new Konva.Stage({
        container: 'container',
        width: width,
        height: height,
    });
    var layer = new Konva.Layer();
    stage.add(layer);
  
    var itemURL = '';
    document
    .getElementById('drag-items')
    .addEventListener('dragstart', function (e) {
        itemURL = e.target.src;
    });
    
    var con = stage.container();
    con.addEventListener('dragover', function (e) {
        e.preventDefault();
    });

    con.addEventListener('drop', function (e) {
        e.preventDefault();
        stage.setPointersPositions(e);
        function getCrop(image, size, clipPosition = 'center-middle') {
            const width = size.width;
            const height = size.height;
            const aspectRatio = width / height;
            
            let newWidth;
            let newHeight;
            
            const imageRatio = image.width / image.height;
            
            if (aspectRatio >= imageRatio) {
                newWidth = image.width;
                newHeight = image.width / aspectRatio;
            } else {
                newWidth = image.height * aspectRatio;
                newHeight = image.height;
            }
            
            let x = 0;
            let y = 0;
            if (clipPosition === 'left-top') {
                x = 0;
                y = 0;
            } else if (clipPosition === 'left-middle') {
                x = 0;
                y = (image.height - newHeight) / 2;
            } else if (clipPosition === 'left-bottom') {
                x = 0;
                y = image.height - newHeight;
            } else if (clipPosition === 'center-top') {
                x = (image.width - newWidth) / 2;
                y = 0;
            } else if (clipPosition === 'center-middle') {
                x = (image.width - newWidth) / 2;
                y = (image.height - newHeight) / 2;
            } else if (clipPosition === 'center-bottom') {
                x = (image.width - newWidth) / 2;
                y = image.height - newHeight;
            } else if (clipPosition === 'right-top') {
                x = image.width - newWidth;
                y = 0;
            } else if (clipPosition === 'right-middle') {
                x = image.width - newWidth;
                y = (image.height - newHeight) / 2;
            } else if (clipPosition === 'right-bottom') {
                x = image.width - newWidth;
                y = image.height - newHeight;
            } else if (clipPosition === 'scale') {
                x = 0;
                y = 0;
                newWidth = width;
                newHeight = height;
            } else {
                console.error(
                new Error('Unknown clip position property - ' + clipPosition)
                );
            }
            
            return {
                cropX: x,
                cropY: y,
                cropWidth: newWidth,
                cropHeight: newHeight,
            };
        }
        
        function applyCrop(pos) {
            const img = layer.findOne('.image');
            img.setAttr('lastCropUsed', pos);
            const crop = getCrop(
            img.image(),
            { width: img.width(), height: img.height() },
            pos
            );
            img.setAttrs(crop);
        }
        
        Konva.Image.fromURL(
        itemURL,
        (img) => {
            img.setAttrs({
                width: 100,
                height: 100,
                // x: 80,
                // y: 100,
                name: 'image',
                draggable: true,
            });
            layer.add(img);  
            
            applyCrop('center-middle');
            
            const tr = new Konva.Transformer({
                nodes: [img],
                keepRatio: false,
                boundBoxFunc: (oldBox, newBox) => {
                    if (newBox.width < 10 || newBox.height < 10) {
                        return oldBox;
                    }
                    return newBox;
                },
            });
            
            layer.add(tr);
            
            img.on('transform', () => {
                // reset scale on transform
                img.setAttrs({
                    scaleX: 1,
                    scaleY: 1,
                    width: img.width() * img.scaleX(),
                    height: img.height() * img.scaleY(),
                });
                applyCrop(img.getAttr('lastCropUsed'));
            });

            img.on('dragend', (t) => {
                // console.log("dragmove", t.target.x(), t.target.y());
                console.log(t.target.setAttr("zIndex",4))

            });
  
        }
        );
    
    });

    
</script>

