TCEFORM.tt_content {
	# Remove number of columns that don't fit into a 12-col grid
	imagecols.removeItems = 5,7,8
	# Remove image orientations that are not supported
	imageorient {
		altLabels.0 = LLL:EXT:rwd_imagepositions/Resources/Private/Language/locallang_db.xlf:tt_content.imageorient.0
		altLabels.8 = LLL:EXT:rwd_imagepositions/Resources/Private/Language/locallang_db.xlf:tt_content.imageorient.8
		removeItems = 1,2,9,10,17,18
		types.image.disabled = 1
	}
	# Setting height & width in pixels is not supported
	imageheight.disabled = 1
	imagewidth.disabled = 1
	# images will always be positioned in grid rows
	image_noRows.disabled = 1
}
