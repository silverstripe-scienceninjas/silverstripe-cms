/**
 * File: AssetAdmin.js
 */

(function($) {
	/**
	 * Delete selected folders through "batch actions" tab.
	 */
	$(document).ready(function() {
		$('#Form_BatchActionsForm').entwine('ss').register(
			// TODO Hardcoding of base URL
			'admin/assets/batchactions/delete', 
			function(ids) {
				var confirmed = confirm(
					ss.i18n.sprintf(
						ss.i18n._t('AssetAdmin.BATCHACTIONSDELETECONFIRM'),
						ids.length
					)
				);
				return (confirmed) ? ids : false;
			}
		);
	});
	
	$.entwine('ss', function($){
		
		/**
		 * Class: #Form_SyncForm
		 */
		$('#Form_SyncForm').entwine({
			
			/**
			 * Function: onsubmit
			 * 
			 * Parameters:
			 *  (Event) e
			 */
			onsubmit: function(e) {
				var button = jQuery(this).find(':submit:first');
				button.addClass('loading');
				$.ajax({
					url: jQuery(this).attr('action'),
					data: this.serializeArray(),
					success: function() {
						button.removeClass('loading');
						// reload current form and tree
						var currNode = $('.cms-tree')[0].firstSelected();
						if(currNode) {
						  var url = $(currNode).find('a').attr('href');
        			$('.cms-content').loadForm(url);
						}
						$('.cms-tree')[0].setCustomURL('admin/assets/getsubtree');
						$('.cms-tree')[0].reload({onSuccess: function() {
							// TODO Reset current tree node
						}});
					}
				});
				
				return false;
			}
		});
		
		$('#Form_filter').entwine({
			/**
				* Function: onsubmit
				* 
				* Parameters:
				*  (Event) e
				*/
			onsubmit: function(e) {
				var button = jQuery(this).find(':submit:first');
				button.addClass('loading');
				
				var filterColumns = {};
				jQuery(this).find('input[type=text]').each(function(idx,elm){
					filterColumns[$(elm).attr('name')] = $(elm).val();
				});
				
				var fileList = $('#Form_EditForm_File');
				fileList.setState('GridFieldFilter', {'Columns':filterColumns});
				fileList.reload(null, function(){
					button.removeClass('loading');
				});
				return false;
			}
		});
		
		$('#Form_filter_action_clearfilter').entwine({
			/**
				* Function: onsubmit
				* 
				* Parameters:
				*  (Event) e
				*/
			onclick: function(e) {
				var button = jQuery(this);
				button.addClass('loading');
				
				var form = jQuery(this).closest('form');
				
				form.find('input[type=text]').each(function(idx,elm) {
					$(elm).val('');
				});
				
				var fileList = $('#Form_EditForm_File');
				fileList.setState('GridFieldFilter', {'Columns':[]});
				fileList.reload(null, function(){
					button.removeClass('loading');
				});
				return false;
			}
		});
	});
	
}(jQuery));