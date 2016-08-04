<?php
    $PAGE_NAME = 'cursor';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>This property lets you define a different cursor to appear when the user mouses over the specified element. However, the definitions are contextual rather than specific, and as such it is up to the browser to decide which cursor actually displays. At this moment, not all of these cursor types are supported yet.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure>
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;.cursorBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-style: double;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;display: inline-block;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;margin-top: 3px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;min-height: 25px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;min-width: 25px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;padding: 0 3px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#aliasBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cursor: alias;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#allScrollBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cursor: all-scroll;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#autoBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cursor: auto;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#cellBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cursor: cell;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#contextMenuBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cursor: context-menu;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#colResizeBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cursor: col-resize;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#copyBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cursor: copy;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#crosshairBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cursor: crosshair;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#defaultBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cursor: default;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#eResizeBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cursor: e-resize;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#ewResizeBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cursor: ew-resize;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#grabBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cursor: grab;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#grabbingBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cursor: grabbing;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#helpBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cursor: help;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#moveBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cursor: move;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#nResizeBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cursor: n-resize;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#neResizeBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cursor: ne-resize;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#neswResizeBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cursor: nesw-resize;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#nsResizeBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cursor: ns-resize;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#nwResizeBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cursor: nw-resize;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#nwse-resizeBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cursor: nwse-resize;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#noDropBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cursor: no-drop;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#noneBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cursor: none;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#notAllowedBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cursor: not-allowed;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#pointerBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cursor: pointer;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#progressBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cursor: progress;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#rowResizeBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cursor: row-resize;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#sResizeBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cursor: s-resize;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#seResizeBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cursor: se-resize;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#swResizeBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cursor: sw-resize;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#textBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cursor: text;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#urlBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cursor: url(/images/violetflower.png),auto;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#verticalTextBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cursor: vertical-text;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#wResizeBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cursor: w-resize;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#waitBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cursor: wait;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#zoomInBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cursor: zoom-in;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#zoomOutBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cursor: zoom-out;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;p&gt;Mouse over each box to see an example of that cursor in your browser. Note that not all cursor types are used by every browser.&lt;/p&gt;
				<br>
				&lt;div class="cursorBox" id="aliasBox"&gt;alias&lt;/div&gt;
				<br>
				&lt;div class="cursorBox" id="allScrollBox"&gt;all-scroll&lt;/div&gt;
				<br>
				&lt;div class="cursorBox" id="autoBox"&gt;auto&lt;/div&gt;
				<br>
				&lt;div class="cursorBox" id="cellBox"&gt;cell&lt;/div&gt;
				<br>
				&lt;div class="cursorBox" id="contextMenuBox"&gt;context-menu&lt;/div&gt;
				<br>
				&lt;div class="cursorBox" id="colResizeBox"&gt;col-resize&lt;/div&gt;
				<br>
				&lt;div class="cursorBox" id="copyBox"&gt;copy&lt;/div&gt;
				<br>
				&lt;div class="cursorBox" id="crosshairBox"&gt;crosshair&lt;/div&gt;
				<br>
				&lt;div class="cursorBox" id="defaultBox"&gt;default&lt;/div&gt;
				<br>
				&lt;div class="cursorBox" id="eResizeBox"&gt;e-resize&lt;/div&gt;
				<br>
				&lt;div class="cursorBox" id="ewResizeBox"&gt;ew-resize&lt;/div&gt;
				<br>
				&lt;div class="cursorBox" id="grabBox"&gt;grab&lt;/div&gt;
				<br>
				&lt;div class="cursorBox" id="grabbingBox"&gt;grabbing&lt;/div&gt;
				<br>
				&lt;div class="cursorBox" id="helpBox"&gt;help&lt;/div&gt;
				<br>
				&lt;div class="cursorBox" id="moveBox"&gt;move&lt;/div&gt;
				<br>
				&lt;div class="cursorBox" id="nResizeBox"&gt;n-resize&lt;/div&gt;
				<br>
				&lt;div class="cursorBox" id="neResizeBox"&gt;ne-resize&lt;/div&gt;
				<br>
				&lt;div class="cursorBox" id="neswResizeBox"&gt;nesw-resize&lt;/div&gt;
				<br>
				&lt;div class="cursorBox" id="nsResizeBox"&gt;ns-resize&lt;/div&gt;
				<br>
				&lt;div class="cursorBox" id="nwResizeBox"&gt;nw-resize&lt;/div&gt;
				<br>
				&lt;div class="cursorBox" id="nwseResizeBox"&gt;nwse-resize&lt;/div&gt;
				<br>
				&lt;div class="cursorBox" id="noDropBox"&gt;no-drop&lt;/div&gt;
				<br>
				&lt;div class="cursorBox" id="noneBox"&gt;none&lt;/div&gt;
				<br>
				&lt;div class="cursorBox" id="notAllowedBox"&gt;not-allowed&lt;/div&gt;
				<br>
				&lt;div class="cursorBox" id="pointerBox"&gt;pointer&lt;/div&gt;
				<br>
				&lt;div class="cursorBox" id="progressBox"&gt;progress&lt;/div&gt;
				<br>
				&lt;div class="cursorBox" id="rowResizeBox"&gt;row-resize&lt;/div&gt;
				<br>
				&lt;div class="cursorBox" id="sResizeBox"&gt;s-resize&lt;/div&gt;
				<br>
				&lt;div class="cursorBox" id="seResizeBox"&gt;se-resize&lt;/div&gt;
				<br>
				&lt;div class="cursorBox" id="swResizeBox"&gt;sw-resize&lt;/div&gt;
				<br>
				&lt;div class="cursorBox" id="textBox"&gt;text&lt;/div&gt;
				<br>
				&lt;div class="cursorBox" id="urlBox"&gt;url&lt;/div&gt;
				<br>
				&lt;div class="cursorBox" id="verticalTextBox"&gt;vertical-text&lt;/div&gt;
				<br>
				&lt;div class="cursorBox" id="wResizeBox"&gt;w-resize&lt;/div&gt;
				<br>
				&lt;div class="cursorBox" id="waitBox"&gt;wait&lt;/div&gt;
				<br>
				&lt;div class="cursorBox" id="zoomInBox"&gt;zoom-in&lt;/div&gt;
				<br>
				&lt;div class="cursorBox" id="zoomOutBox"&gt;zoom-out&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure>
			<style>
				.cursorBox {
					border-style: double;
					display: inline-block;
					margin-top: 3px;
					min-height: 25px;
					min-width: 25px;
					padding: 0 3px;
				}
				#aliasBox {
					cursor: alias;
				}
				#allScrollBox {
					cursor: all-scroll;
				}
				#autoBox {
					cursor: auto;
				}
				#cellBox {
					cursor: cell;
				}
				#contextMenuBox {
					cursor: context-menu;
				}
				#colResizeBox {
					cursor: col-resize;
				}
				#copyBox {
					cursor: copy;
				}
				#crosshairBox {
					cursor: crosshair;
				}
				#defaultBox {
					cursor: default;
				}
				#eResizeBox {
					cursor: e-resize;
				}
				#ewResizeBox {
					cursor: ew-resize;
				}
				#grabBox {
					cursor: grab;
				}
				#grabbingBox {
					cursor: grabbing;
				}
				#helpBox {
					cursor: help;
				}
				#moveBox {
					cursor: move;
				}
				#nResizeBox {
					cursor: n-resize;
				}
				#neResizeBox {
					cursor: ne-resize;
				}
				#neswResizeBox {
					cursor: nesw-resize;
				}
				#nsResizeBox {
					cursor: ns-resize;
				}
				#nwResizeBox {
					cursor: nw-resize;
				}
				#nwse-resizeBox {
					cursor: nwse-resize;
				}
				#noDropBox {
					cursor: no-drop;
				}
				#noneBox {
					cursor: none;
				}
				#notAllowedBox {
					cursor: not-allowed;
				}
				#pointerBox {
					cursor: pointer;
				}
				#progressBox {
					cursor: progress;
				}
				#rowResizeBox {
					cursor: row-resize;
				}
				#sResizeBox {
					cursor: s-resize;
				}
				#seResizeBox {
					cursor: se-resize;
				}
				#swResizeBox {
					cursor: sw-resize;
				}
				#textBox {
					cursor: text;
				}
				#urlBox {
					cursor: url(/images/violetflower.png),auto;
				}
				#verticalTextBox {
					cursor: vertical-text;
				}
				#wResizeBox {
					cursor: w-resize;
				}
				#waitBox {
					cursor: wait;
				}
				#zoomInBox {
					cursor: zoom-in;
				}
				#zoomOutBox {
					cursor: zoom-out;
				}
			</style>
			<p>Mouse over each box to see an example of that cursor in your browser. Note that not all cursor types are used by every browser.</p>
			<div class="cursorBox" id="aliasBox">alias</div>
			<div class="cursorBox" id="allScrollBox">all-scroll</div>
			<div class="cursorBox" id="autoBox">auto</div>
			<div class="cursorBox" id="cellBox">cell</div>
			<div class="cursorBox" id="contextMenuBox">context-menu</div>
			<div class="cursorBox" id="colResizeBox">col-resize</div>
			<div class="cursorBox" id="copyBox">copy</div>
			<div class="cursorBox" id="crosshairBox">crosshair</div>
			<div class="cursorBox" id="defaultBox">default</div>
			<div class="cursorBox" id="eResizeBox">e-resize</div>
			<div class="cursorBox" id="ewResizeBox">ew-resize</div>
			<div class="cursorBox" id="grabBox">grab</div>
			<div class="cursorBox" id="grabbingBox">grabbing</div>
			<div class="cursorBox" id="helpBox">help</div>
			<div class="cursorBox" id="moveBox">move</div>
			<div class="cursorBox" id="nResizeBox">n-resize</div>
			<div class="cursorBox" id="neResizeBox">ne-resize</div>
			<div class="cursorBox" id="neswResizeBox">nesw-resize</div>
			<div class="cursorBox" id="nsResizeBox">ns-resize</div>
			<div class="cursorBox" id="nwResizeBox">nw-resize</div>
			<div class="cursorBox" id="nwseResizeBox">nwse-resize</div>
			<div class="cursorBox" id="noDropBox">no-drop</div>
			<div class="cursorBox" id="noneBox">none</div>
			<div class="cursorBox" id="notAllowedBox">not-allowed</div>
			<div class="cursorBox" id="pointerBox">pointer</div>
			<div class="cursorBox" id="progressBox">progress</div>
			<div class="cursorBox" id="rowResizeBox">row-resize</div>
			<div class="cursorBox" id="sResizeBox">s-resize</div>
			<div class="cursorBox" id="seResizeBox">se-resize</div>
			<div class="cursorBox" id="swResizeBox">sw-resize</div>
			<div class="cursorBox" id="textBox">text</div>
			<div class="cursorBox" id="urlBox">url</div>
			<div class="cursorBox" id="verticalTextBox">vertical-text</div>
			<div class="cursorBox" id="wResizeBox">w-resize</div>
			<div class="cursorBox" id="waitBox">wait</div>
			<div class="cursorBox" id="zoomInBox">zoom-in</div>
			<div class="cursorBox" id="zoomOutBox">zoom-out</div>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code></code>:</h4>
		<dl>
			<dt><code>alias</code></dt>
			<dd>&#10551; A cursor indicating an alias (or shortcut) to something is to be created.</dd>
			<dt><code>all-scroll</code></dt>
			<dd>&#10551; A cursor indicating that something can be scrolled in any direction.</dd>
			<dt><code>auto</code></dt>
			<dd>&#10551; The default value. The browser auto-selects an appropriate cursor.</dd>
			<dt><code>cell</code></dt>
			<dd>&#10551; A cursor indicating that a table cell may be selected.</dd>
			<dt><code>context-menu</code></dt>
			<dd>&#10551; A cursor indicating that a context menu is available.</dd>
			<dt><code>col-resize</code></dt>
			<dd>&#10551; A cursor indicating that a table column may be resized horizontally.</dd>
			<dt><code>copy</code></dt>
			<dd>&#10551; A cursor indicating that something is to be copied.</dd>
			<dt><code>crosshair</code></dt>
			<dd>&#10551; A cursor that looks like a crosshair.</dd>
			<dt><code>default</code></dt>
			<dd>&#10551; The user's default cursor.</dd>
			<dt><code>e-resize</code></dt>
			<dd>&#10551; A cursor indicating that the edge of something can be moved right.</dd>
			<dt><code>ew-resize</code></dt>
			<dd>&#10551; A cursor indicating that the edges of something can be moved left or right.</dd>
			<dt><code>grab</code></dt>
			<dd>&#10551; A cursor indicating that something can be grabbed.</dd>
			<dt><code>grabbing</code></dt>
			<dd>&#10551; A cursor indicating that something is being grabbed.</dd>
			<dt><code>help</code></dt>
			<dd>&#10551; A cursor indicating that help is available.</dd>
			<dt><code>move</code></dt>
			<dd>&#10551; A cursor indicating that something can be moved.</dd>
			<dt><code>n-resize</code></dt>
			<dd>&#10551; A cursor indicating that the edge of something can be moved up.</dd>
			<dt><code>ne-resize</code></dt>
			<dd>&#10551; A cursor indicating that the edge of something can be moved up and right.</dd>
			<dt><code>nesw-resize</code></dt>
			<dd>&#10551; A cursor indicating that the edges of something can be moved up and right or down and left.</dd>
			<dt><code>ns-resize</code></dt>
			<dd>&#10551; A cursor indicating that the edges of something can be moved up or down.</dd>
			<dt><code>nw-resize</code></dt>
			<dd>&#10551; A cursor indicating that the edges of something can be moved up and left.</dd>
			<dt><code>nwse-resize</code></dt>
			<dd>&#10551; A cursor indicating that the edges of something can be moved up and left or down and right.</dd>
			<dt><code>no-drop</code></dt>
			<dd>&#10551; A cursor indicating that a dragged object cannot be dropped here.</dd>
			<dt><code>none</code></dt>
			<dd>&#10551; No cursor.</dd>
			<dt><code>not-allowed</code></dt>
			<dd>&#10551; A cursor indicating that the requested action will not be allowed.</dd>
			<dt><code>pointer</code></dt>
			<dd>&#10551; A cursor indicating that something is a link.</dd>
			<dt><code>progress</code></dt>
			<dd>&#10551; A cursor indicating that a process is in progress.</dd>
			<dt><code>row-resize</code></dt>
			<dd>&#10551; A cursor indicating that a table row may be resized vertically.</dd>
			<dt><code>s-resize</code></dt>
			<dd>&#10551; A cursor indicating that the edge of something can be moved down.</dd>
			<dt><code>se-resize</code></dt>
			<dd>&#10551; A cursor indicating that the edge of something can be moved down and right.</dd>
			<dt><code>sw-resize</code></dt>
			<dd>&#10551; A cursor indicating that the edge of something can be moved down and left.</dd>
			<dt><code>text</code></dt>
			<dd>&#10551; A cursor indicating that text may be selected.</dd>
			<dt><code>url(<var>URL</var>,<var>fallback</var>)</code></dt>
			<dd>
				&#10551; A prioritized list of URLs to custom cursor images. Additional URLs may be added within the parentheses, separated by commas, and the first usable option will be used. The list should always end with another value of <code>cursor</code>, often <code>auto</code>, so that if the images can't be displayed the cursor will still show.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>URL</var></code></dt>
						<dd>&#10551; URL variable. The address of the image to be used as a cursor.</dd>
						<dt><code><var>fallback</var></code></dt>
						<dd>&#10551; Text variable, other values of <code>cursor</code>. A generic fallback in case the image cursors aren't usable.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>vertical-text</code></dt>
			<dd>&#10551; A cursor indicating that vertical text may be selected.</dd>
			<dt><code>w-resize</code></dt>
			<dd>&#10551; A cursor indicating that the edge of something may be moved left.</dd>
			<dt><code>wait</code></dt>
			<dd>&#10551; A cursor indicating that a process is currently busy.</dd>
			<dt><code>zoom-in</code></dt>
			<dd>&#10551; A cursor indicating that something can be zoomed in.</dd>
			<dt><code>zoom-out</code></dt>
			<dd>&#10551; A cursor indicating that something can be zoomed out.</dd>
			<dt><code>initial</code></dt>
			<dd>&#10551; Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>&#10551; Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
</main>
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
