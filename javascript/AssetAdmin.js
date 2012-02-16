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
		
		$('.cms-filter-form').entwine({
			
			GridField: null,
			
			/**
			 * Function onmatch
			 *
			 * Try to find the related gridfield by looking up the data-gridfield attribute on this
			 * filter form
			 */
			onmatch: function() {
				var gridfieldName = this.attr('data-gridfield');
				this.setGridField($('.grid[data-name='+gridfieldName+']'));
			},
			
			/**
			 * Function: onsubmit
			 * 
			 * Parameters:
			 *  (Event) e
			 */
			onsubmit: function(e) {
				this.changeState(jQuery(this).find(':submit:first'));
				return false;
			},
			
			/**
			 * Function: onreset
			 * 
			 * Parameters:
			 *  (Event) e
			 */
			onreset: function(e) {
				if(this.resetFilterForm()) {
					this.changeState(jQuery(this));
				}
				return false;
			},
			
			/**
			 *  Function resetFilterForm
			 *  
			 **/
			resetFilterForm: function() {
				var needUpdate = false;
				this.filterFields().each(function(idx, element) {
					if($(element).val()) {
						needUpdate = true; 
						$(element).val('');
					}
				});
				return needUpdate;
			},
			
			/**
			 * Function: changeState
			 * 
			 * Change the state of the gridfield, reloads it's and set loading classes on elements
			 * 
			 * Parameters:
			 *   (Element) element - the element that will get a loading class added / removed
			 *
			 */
			changeState: function(element) {
				element.addClass('loading');
				this.getGridField().setState('GridFieldFilter', {'Columns': this.filterValues()});
				this.getGridField().reload(null, function(){
					element.removeClass('loading');
				});
			},
			
			/**
			 * Function filterFields
			 * Get all fields that contains filter values
			 *
			 */
			filterFields: function() {
				return this.find(':input').not(".action, .hidden");
			},
			
			/**
			 * Function: filterValues
			 * 
			 * Returns an key-value array for the filter values set in the filter form
			 *
			 */
			filterValues: function() {
				var filterColumns = {};
				this.filterFields().each(function(idx,elm){
					filterColumns[$(elm).attr('name')] = $(elm).val();
				});
				return filterColumns;
			}
		});
	});
}(jQuery));