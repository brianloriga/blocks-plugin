Notes:

Side Panel Instructions
** Use this import {PanelBody} from '@wordpress/components'; to bring in the side panel direct from WordPress

** On the Sidepanel, if you want to bring additional controls for the block, please reference https://developer.wordpress.org/block-editor/reference-guides/components/

Tailwind has been installed for the Front End, you can just use scss, but you cal also use Tailwind. 
** Remember to add the Tailwind to the build and start scripts in the package.json. To do that first create a new block and then add the scss file paths to the builds, for example,
   you just added a new block called "peak", simply add this to the build script postcss src/blocks/peak/style.scss -o build/blocks/peak/style.css and to the start script you would 
   add postcss src/blocks/peak/style.scss -o build/blocks/peak/style.css --watch


To Create A New block
1: In The src/blocks folder begin by adding a new folder with the name of the block
2: 