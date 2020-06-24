package
{
	import com.Piece;
	import flash.display.Bitmap;
	import flash.display.Loader;
	import flash.display.Sprite;
	import flash.events.Event;
	import flash.net.URLRequest;
	
	/**
	 * ...
	 * @author ami hanya ami@orn.co.il
	 */
	public class Main extends Sprite
	{
		private var nowbitmap:Bitmap;
		private var piecesArray:Array = new Array();
		private var horizontalPieces:Number = 5;
		private var verticalPieces:Number = 4;
		private var imageWidth:Number;
		private var imageHeight:Number;
		private var pieceWidth:Number;
		private var pieceHeight:Number;
		private var showGuid:Boolean = true;
		private var showGuidCon:Sprite;
		private var regularCon:Sprite;
		
		public function Main():void
		{
			if (stage)
				init();
			else
				addEventListener(Event.ADDED_TO_STAGE, init);
		}
		
		private function init(e:Event = null):void
		{
			removeEventListener(Event.ADDED_TO_STAGE, init);
			var imageLoader:Loader = new Loader();
			var image:URLRequest = new URLRequest("bio103/jigsaw/bin/scimeth.jpg");
			imageLoader.contentLoaderInfo.addEventListener(Event.COMPLETE, imageLoad);
			imageLoader.load(image);
		
		}
		
		
		private function imageLoad(e:Event = null):void
		{
			nowbitmap = e.target.content as Bitmap;
			//imageWidth = nowbitmap.width;
			//imageHeight = nowbitmap.height;
			imageWidth = nowbitmap.width;
			imageHeight = nowbitmap.height;
			pieceWidth = Math.round(imageWidth / horizontalPieces);
			pieceHeight = Math.round(imageHeight / verticalPieces);
			if (showGuid)
			{
				showGuidCon = new Sprite
				addChild(showGuidCon);
			}
			regularCon = new Sprite
			addChild(regularCon);
			for (var i:uint = 0; i < horizontalPieces; i++)
			{
				piecesArray[i] = new Array();
				for (var j:uint = 0; j < verticalPieces; j++)
				{
					piecesArray[i][j] = new Object();
					piecesArray[i][j].right = Math.floor(Math.random() * 2);
					piecesArray[i][j].down = Math.floor(Math.random() * 2);
					if (j > 0)
					{
						piecesArray[i][j].up = 1 - piecesArray[i][j - 1].down;
					}
					if (i > 0)
					{
						piecesArray[i][j].left = 1 - piecesArray[i - 1][j].right;
					}
					var n:Number = j + i * verticalPieces;
					if (showGuid)
					{
						var pieceGuid:Piece = new Piece
						showGuidCon.addChild(pieceGuid);
						pieceGuid.init({image: nowbitmap.bitmapData, i: i, j: j, tileObj: piecesArray[i][j], horizontalPieces: horizontalPieces, verticalPieces: verticalPieces, crop: {x: i * pieceWidth, y: j * pieceHeight, width: pieceWidth, height: pieceHeight}, x: i * pieceWidth + i, y: j * pieceHeight + j, width: pieceWidth, height: pieceHeight, draggable: false});
					}
					var piece:Piece = new Piece
					regularCon.addChild(piece);
					piece.init({image: nowbitmap.bitmapData, i: i, j: j, tileObj: piecesArray[i][j], horizontalPieces: horizontalPieces, verticalPieces: verticalPieces, crop: {x: i * pieceWidth, y: j * pieceHeight, width: pieceWidth, height: pieceHeight}, x: i * pieceWidth + i, y: j * pieceHeight + j, width: pieceWidth, height: pieceHeight, draggable: true});
					
				}
			}
		}
	
	}

}