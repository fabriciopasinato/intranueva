<?php
/**
 * Icon Picker Type BuddyBoss
 *
 * @package Icon_Picker
 */

require_once dirname( __FILE__ ) . '/font.php';

/**
 * BuddyBoss Icons
 *
 * @package Icon_Picker
 * @author  Dzikri Aziz <kvcrvt@gmail.com>
 */
class Icon_Picker_Type_BuddyBoss extends Icon_Picker_Type_Font {

	/**
	 * Icon type ID.
	 *
	 * @since Menu Icons 0.1.0
	 * @access protected
	 * @var    string
	 */
	protected $id = 'buddyboss';

	/**
	 * Icon type version.
	 *
	 * @since Menu Icons 0.1.0
	 * @access protected
	 * @var    string
	 */
	protected $version = '1.0';

	/**
	 * Constructor.
	 *
	 * @since 2.0.0
	 *
	 * @param array $args Misc. arguments.
	 */
	public function __construct( $args = array() ) {
		$this->name = esc_html__( 'BuddyBoss', 'buddyboss-theme' );

		parent::__construct( $args );
	}

	/**
	 * Get icon groups
	 *
	 * @since Menu Icons 0.1.0
	 *
	 * @return array
	 */
	public function get_groups() {
		$groups = array(
			array(
				'id'   => 'accessibility',
				'name' => esc_html__( 'Accessibility', 'buddyboss-theme' ),
			),
			array(
				'id'   => 'alerts',
				'name' => esc_html__( 'Alerts', 'buddyboss-theme' ),
			),
			array(
				'id'   => 'arrows',
				'name' => esc_html__( 'Arrows', 'buddyboss-theme' ),
			),
			array(
				'id'   => 'brands',
				'name' => esc_html__( 'Brands', 'buddyboss-theme' ),
			),
			array(
				'id'   => 'interfaces',
				'name' => esc_html__( 'Interfaces', 'buddyboss-theme' ),
			),
			array(
				'id'   => 'media-files',
				'name' => esc_html__( 'Media & Files', 'buddyboss-theme' ),
			),
			array(
				'id'   => 'objects',
				'name' => esc_html__( 'Objects', 'buddyboss-theme' ),
			),
			array(
				'id'   => 'shopping-money',
				'name' => esc_html__( 'Shopping & Money', 'buddyboss-theme' ),
			),
			array(
				'id'   => 'technology',
				'name' => esc_html__( 'Technology', 'buddyboss-theme' ),
			),
			array(
				'id'   => 'text-formatting',
				'name' => esc_html__( 'Text & Formatting', 'buddyboss-theme' ),
			),
			array(
				'id'   => 'users-people',
				'name' => esc_html__( 'Users & People', 'buddyboss-theme' ),
			),
		);

		/**
		 * Filter buddyboss groups.
		 *
		 * @since 0.1.0
		 *
		 * @param array $groups Icon groups.
		 */
		$groups = apply_filters( 'icon_picker_buddyboss_groups', $groups );

		return $groups;
	}

	/**
	 * Get icon names.
	 *
	 * @since Menu Icons 0.1.0
	 *
	 * @return array
	 */
	public function get_items() {
		$items = array(
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-activity',
				'name'  => esc_html__( 'Activity', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-activity-slash',
				'name'  => esc_html__( 'Activity Slash', 'buddyboss-theme' ),
			),
			array(
				'group' => 'users-people',
				'id'    => 'bb-icon-address-book',
				'name'  => esc_html__( 'Address Book', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-airplay',
				'name'  => esc_html__( 'Airplay', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-alarm',
				'name'  => esc_html__( 'Alarm', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-album',
				'name'  => esc_html__( 'Album', 'buddyboss-theme' ),
			),
			array(
				'group' => 'text-formatting',
				'id'    => 'bb-icon-align-center',
				'name'  => esc_html__( 'Align Center', 'buddyboss-theme' ),
			),
			array(
				'group' => 'text-formatting',
				'id'    => 'bb-icon-align-justify',
				'name'  => esc_html__( 'Align Justify', 'buddyboss-theme' ),
			),
			array(
				'group' => 'text-formatting',
				'id'    => 'bb-icon-align-left',
				'name'  => esc_html__( 'Align Left', 'buddyboss-theme' ),
			),
			array(
				'group' => 'text-formatting',
				'id'    => 'bb-icon-align-right',
				'name'  => esc_html__( 'Align Right', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-anchor',
				'name'  => esc_html__( 'Anchor', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-android',
				'name'  => esc_html__( 'Android', 'buddyboss-theme' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'bb-icon-angle-double-down',
				'name'  => esc_html__( 'Angle Double Down', 'buddyboss-theme' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'bb-icon-angle-double-left',
				'name'  => esc_html__( 'Angle Double Left', 'buddyboss-theme' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'bb-icon-angle-double-right',
				'name'  => esc_html__( 'Angle Double Right', 'buddyboss-theme' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'bb-icon-angle-double-up',
				'name'  => esc_html__( 'Angle Double Up', 'buddyboss-theme' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'bb-icon-angle-down',
				'name'  => esc_html__( 'Angle Down', 'buddyboss-theme' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'bb-icon-angle-left',
				'name'  => esc_html__( 'Angle Left', 'buddyboss-theme' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'bb-icon-angle-right',
				'name'  => esc_html__( 'Angle Right', 'buddyboss-theme' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'bb-icon-angle-up',
				'name'  => esc_html__( 'Angle Up', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-aperture',
				'name'  => esc_html__( 'Aperture', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-apple',
				'name'  => esc_html__( 'Apple', 'buddyboss-theme' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'bb-icon-arrow-down',
				'name'  => esc_html__( 'Arrow Down', 'buddyboss-theme' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'bb-icon-arrow-left',
				'name'  => esc_html__( 'Arrow Left', 'buddyboss-theme' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'bb-icon-arrow-right',
				'name'  => esc_html__( 'Arrow Right', 'buddyboss-theme' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'bb-icon-arrow-up',
				'name'  => esc_html__( 'Arrow Up', 'buddyboss-theme' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'bb-icon-arrows',
				'name'  => esc_html__( 'Arrows', 'buddyboss-theme' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'bb-icon-arrows-h',
				'name'  => esc_html__( 'Arrows Horizontal', 'buddyboss-theme' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'bb-icon-arrows-v',
				'name'  => esc_html__( 'Arrows Vertical', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-article',
				'name'  => esc_html__( 'Article', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-article-slash',
				'name'  => esc_html__( 'Article Slash', 'buddyboss-theme' ),
			),
			array(
				'group' => 'text-formatting',
				'id'    => 'bb-icon-asterisk',
				'name'  => esc_html__( 'Asterisk', 'buddyboss-theme' ),
			),
			array(
				'group' => 'text-formatting',
				'id'    => 'bb-icon-at',
				'name'  => esc_html__( 'At', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-attach',
				'name'  => esc_html__( 'Attach', 'buddyboss-theme' ),
			),
			array(
				'group' => 'accessibility',
				'id'    => 'bb-icon-audio-description',
				'name'  => esc_html__( 'Audio Description', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-award',
				'name'  => esc_html__( 'Award', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-award-slash',
				'name'  => esc_html__( 'Award Slash', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-backward',
				'name'  => esc_html__( 'Backward', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-ball-soccer',
				'name'  => esc_html__( 'Ball Soccer', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-bars',
				'name'  => esc_html__( 'Bars', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-bars-2',
				'name'  => esc_html__( 'Bars 2', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-battery',
				'name'  => esc_html__( 'Battery', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-battery-empty',
				'name'  => esc_html__( 'Battery Empty', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-battery-full',
				'name'  => esc_html__( 'Battery Full', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-battery-half',
				'name'  => esc_html__( 'Battery Half', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-battery-quarter',
				'name'  => esc_html__( 'Battery Quarter', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-battery-slash',
				'name'  => esc_html__( 'Battery Slash', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-battery-three-quarters',
				'name'  => esc_html__( 'Battery Three Quarters', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-bell',
				'name'  => esc_html__( 'Bell', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-bell-plus',
				'name'  => esc_html__( 'Bell Plus', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-bell-slash',
				'name'  => esc_html__( 'Bell Slash', 'buddyboss-theme' ),
			),
			array(
				'group' => 'technology',
				'id'    => 'bb-icon-bluetooth',
				'name'  => esc_html__( 'Bluetooth', 'buddyboss-theme' ),
			),
			array(
				'group' => 'text-formatting',
				'id'    => 'bb-icon-bold',
				'name'  => esc_html__( 'Bold', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-bolt',
				'name'  => esc_html__( 'Bolt', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-book',
				'name'  => esc_html__( 'Book', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-book-open',
				'name'  => esc_html__( 'Book Open', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-bookmark',
				'name'  => esc_html__( 'Bookmark', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-books',
				'name'  => esc_html__( 'Books', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-box',
				'name'  => esc_html__( 'Box', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-briefcase',
				'name'  => esc_html__( 'Briefcase', 'buddyboss-theme' ),
			),
			array(
				'group' => 'technology',
				'id'    => 'bb-icon-browser',
				'name'  => esc_html__( 'Browser', 'buddyboss-theme' ),
			),
			array(
				'group' => 'technology',
				'id'    => 'bb-icon-browser-code',
				'name'  => esc_html__( 'Browser Code', 'buddyboss-theme' ),
			),
			array(
				'group' => 'technology',
				'id'    => 'bb-icon-browser-terminal',
				'name'  => esc_html__( 'Browser Terminal', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-buddyboss',
				'name'  => esc_html__( 'BuddyBoss', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-buddyboss-app',
				'name'  => esc_html__( 'BuddyBoss App', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-buddyboss-bolt',
				'name'  => esc_html__( 'BuddyBoss Bolt', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-buddypress',
				'name'  => esc_html__( 'BuddyPress', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-bunnynet',
				'name'  => esc_html__( 'Bunny Net', 'buddyboss-theme' ),
			),
			array(
				'group' => 'technology',
				'id'    => 'bb-icon-bug',
				'name'  => esc_html__( 'Bug', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-bullhorn',
				'name'  => esc_html__( 'Bullhorn', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-bullseye',
				'name'  => esc_html__( 'Bullseye', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-calendar',
				'name'  => esc_html__( 'Calendar', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-camera',
				'name'  => esc_html__( 'Camera', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-camera-slash',
				'name'  => esc_html__( 'Camera Slash', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-cancel',
				'name'  => esc_html__( 'Cancel', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-car-small',
				'name'  => esc_html__( 'Car Small', 'buddyboss-theme' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'bb-icon-caret-down',
				'name'  => esc_html__( 'Caret Down', 'buddyboss-theme' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'bb-icon-caret-left',
				'name'  => esc_html__( 'Caret Left', 'buddyboss-theme' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'bb-icon-caret-right',
				'name'  => esc_html__( 'Caret Right', 'buddyboss-theme' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'bb-icon-caret-up',
				'name'  => esc_html__( 'Caret Up', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-cast',
				'name'  => esc_html__( 'Cast', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-certificate',
				'name'  => esc_html__( 'Certificate', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-chart-area',
				'name'  => esc_html__( 'Chart Area', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-chart-bar-h',
				'name'  => esc_html__( 'Chart Bar Horizontal', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-chart-bar-trending',
				'name'  => esc_html__( 'Chart Bar Trending', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-chart-bar-v',
				'name'  => esc_html__( 'Chart Bar Vertical', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-chart-line',
				'name'  => esc_html__( 'Chart Line', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-chart-pie',
				'name'  => esc_html__( 'Chart Pie', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-check',
				'name'  => esc_html__( 'Check', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-checkbox',
				'name'  => esc_html__( 'Checkbox', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-chrome',
				'name'  => esc_html__( 'Chrome', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-circle',
				'name'  => esc_html__( 'Circle', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-clipboard',
				'name'  => esc_html__( 'Clipboard', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-clock',
				'name'  => esc_html__( 'Clock', 'buddyboss-theme' ),
			),
			array(
				'group' => 'accessibility',
				'id'    => 'bb-icon-closed-capitioning',
				'name'  => esc_html__( 'Closed Capitioning', 'buddyboss-theme' ),
			),
			array(
				'group' => 'technology',
				'id'    => 'bb-icon-cloud',
				'name'  => esc_html__( 'Cloud', 'buddyboss-theme' ),
			),
			array(
				'group' => 'technology',
				'id'    => 'bb-icon-cloud-check',
				'name'  => esc_html__( 'Cloud Check', 'buddyboss-theme' ),
			),
			array(
				'group' => 'technology',
				'id'    => 'bb-icon-cloud-download',
				'name'  => esc_html__( 'Cloud Download', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-cloud-drizzle',
				'name'  => esc_html__( 'Cloud Drizzle', 'buddyboss-theme' ),
			),
			array(
				'group' => 'technology',
				'id'    => 'bb-icon-cloud-exclamation',
				'name'  => esc_html__( 'Cloud Exclamation', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-cloud-lightning',
				'name'  => esc_html__( 'Cloud Lightning', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-cloud-rain',
				'name'  => esc_html__( 'Cloud Rain', 'buddyboss-theme' ),
			),
			array(
				'group' => 'technology',
				'id'    => 'bb-icon-cloud-slash',
				'name'  => esc_html__( 'Cloud Slash', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-cloud-snow',
				'name'  => esc_html__( 'Cloud Snow', 'buddyboss-theme' ),
			),
			array(
				'group' => 'technology',
				'id'    => 'bb-icon-cloud-sync',
				'name'  => esc_html__( 'Cloud Sync', 'buddyboss-theme' ),
			),
			array(
				'group' => 'technology',
				'id'    => 'bb-icon-cloud-times',
				'name'  => esc_html__( 'Cloud Times', 'buddyboss-theme' ),
			),
			array(
				'group' => 'technology',
				'id'    => 'bb-icon-cloud-upload',
				'name'  => esc_html__( 'Cloud Upload', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-clubhouse',
				'name'  => esc_html__( 'Clubhouse', 'buddyboss-theme' ),
			),
			array(
				'group' => 'technology',
				'id'    => 'bb-icon-code',
				'name'  => esc_html__( 'Code', 'buddyboss-theme' ),
			),
			array(
				'group' => 'technology',
				'id'    => 'bb-icon-code-branch',
				'name'  => esc_html__( 'Code Branch', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-codepen',
				'name'  => esc_html__( 'CodePen', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-cog',
				'name'  => esc_html__( 'Cog', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-cogs',
				'name'  => esc_html__( 'Cogs', 'buddyboss-theme' ),
			),
			array(
				'group' => 'shopping-money',
				'id'    => 'bb-icon-coin',
				'name'  => esc_html__( 'Coin', 'buddyboss-theme' ),
			),
			array(
				'group' => 'shopping-money',
				'id'    => 'bb-icon-coins',
				'name'  => esc_html__( 'Coins', 'buddyboss-theme' ),
			),
			array(
				'group' => 'text-formatting',
				'id'    => 'bb-icon-columns',
				'name'  => esc_html__( 'Columns', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-command',
				'name'  => esc_html__( 'Command', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-comment',
				'name'  => esc_html__( 'Comment', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-comment-activity',
				'name'  => esc_html__( 'Comment Activity', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-comment-dots',
				'name'  => esc_html__( 'Comment Dots', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-comment-notification',
				'name'  => esc_html__( 'Comment Notification', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-comment-slash',
				'name'  => esc_html__( 'Comment Slash', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-comment-square',
				'name'  => esc_html__( 'Comment Square', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-comment-square-dots',
				'name'  => esc_html__( 'Comment Square Dots', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-comment-square-slash',
				'name'  => esc_html__( 'Comment Square Slash', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-comments',
				'name'  => esc_html__( 'Comments', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-comments-slash',
				'name'  => esc_html__( 'Comments Slash', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-comments-square',
				'name'  => esc_html__( 'Comments Square', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-comments-square-slash',
				'name'  => esc_html__( 'Comments Square Slash', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-compass',
				'name'  => esc_html__( 'Compass', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-compress',
				'name'  => esc_html__( 'Compress', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-copy',
				'name'  => esc_html__( 'Copy', 'buddyboss-theme' ),
			),
			array(
				'group' => 'text-formatting',
				'id'    => 'bb-icon-copyright',
				'name'  => esc_html__( 'Copyright', 'buddyboss-theme' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'bb-icon-corner-left',
				'name'  => esc_html__( 'Corner Left', 'buddyboss-theme' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'bb-icon-corner-right',
				'name'  => esc_html__( 'Corner Right', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-course',
				'name'  => esc_html__( 'Course', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-course-slash',
				'name'  => esc_html__( 'Course Slash', 'buddyboss-theme' ),
			),
			array(
				'group' => 'technology',
				'id'    => 'bb-icon-cpu',
				'name'  => esc_html__( 'CPU', 'buddyboss-theme' ),
			),
			array(
				'group' => 'shopping-money',
				'id'    => 'bb-icon-credit-card',
				'name'  => esc_html__( 'Credit Card', 'buddyboss-theme' ),
			),
			array(
				'group' => 'text-formatting',
				'id'    => 'bb-icon-crop',
				'name'  => esc_html__( 'Crop', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-crosshairs',
				'name'  => esc_html__( 'Crosshairs', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-crown',
				'name'  => esc_html__( 'Crown', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-cube',
				'name'  => esc_html__( 'Cube', 'buddyboss-theme' ),
			),
			array(
				'group' => 'shopping-money',
				'id'    => 'bb-icon-currency-bitcoin',
				'name'  => esc_html__( 'Currency Bitcoin', 'buddyboss-theme' ),
			),
			array(
				'group' => 'shopping-money',
				'id'    => 'bb-icon-currency-crypto',
				'name'  => esc_html__( 'Currency Crypto', 'buddyboss-theme' ),
			),
			array(
				'group' => 'shopping-money',
				'id'    => 'bb-icon-currency-dollar',
				'name'  => esc_html__( 'Currency Dollar', 'buddyboss-theme' ),
			),
			array(
				'group' => 'shopping-money',
				'id'    => 'bb-icon-currency-euro',
				'name'  => esc_html__( 'Currency Euro', 'buddyboss-theme' ),
			),
			array(
				'group' => 'shopping-money',
				'id'    => 'bb-icon-currency-lira',
				'name'  => esc_html__( 'Currency Lira', 'buddyboss-theme' ),
			),
			array(
				'group' => 'shopping-money',
				'id'    => 'bb-icon-currency-peso',
				'name'  => esc_html__( 'Currency Peso', 'buddyboss-theme' ),
			),
			array(
				'group' => 'shopping-money',
				'id'    => 'bb-icon-currency-pound',
				'name'  => esc_html__( 'Currency Pound', 'buddyboss-theme' ),
			),
			array(
				'group' => 'shopping-money',
				'id'    => 'bb-icon-currency-ruble',
				'name'  => esc_html__( 'Currency Ruble', 'buddyboss-theme' ),
			),
			array(
				'group' => 'shopping-money',
				'id'    => 'bb-icon-currency-rupee',
				'name'  => esc_html__( 'Currency Rupee', 'buddyboss-theme' ),
			),
			array(
				'group' => 'shopping-money',
				'id'    => 'bb-icon-currency-won',
				'name'  => esc_html__( 'Currency Won', 'buddyboss-theme' ),
			),
			array(
				'group' => 'shopping-money',
				'id'    => 'bb-icon-currency-yen',
				'name'  => esc_html__( 'Currency Yen', 'buddyboss-theme' ),
			),
			array(
				'group' => 'text-formatting',
				'id'    => 'bb-icon-cut',
				'name'  => esc_html__( 'Cut', 'buddyboss-theme' ),
			),
			array(
				'group' => 'technology',
				'id'    => 'bb-icon-database',
				'name'  => esc_html__( 'Database', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-delete-tag',
				'name'  => esc_html__( 'Delete Tag', 'buddyboss-theme' ),
			),
			array(
				'group' => 'technology',
				'id'    => 'bb-icon-desktop',
				'name'  => esc_html__( 'Desktop', 'buddyboss-theme' ),
			),
			array(
				'group' => 'text-formatting',
				'id'    => 'bb-icon-divide',
				'name'  => esc_html__( 'Divide', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-dot-circle',
				'name'  => esc_html__( 'Dot Circle', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-download',
				'name'  => esc_html__( 'Download', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-dribbble',
				'name'  => esc_html__( 'Dribbble', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-droplet',
				'name'  => esc_html__( 'Droplet', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-duplicate',
				'name'  => esc_html__( 'Duplicate', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-edit',
				'name'  => esc_html__( 'Edit', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-eject',
				'name'  => esc_html__( 'Eject', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-elementor',
				'name'  => esc_html__( 'Elementor', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-ellipsis-h',
				'name'  => esc_html__( 'Ellipsis Horizontal', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-ellipsis-v',
				'name'  => esc_html__( 'Ellipsis Vertical', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-emoticon-confused',
				'name'  => esc_html__( 'Emoticon Confused', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-emoticon-frown',
				'name'  => esc_html__( 'Emoticon Frown', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-emoticon-smile',
				'name'  => esc_html__( 'Emoticon Smile', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-emoticon-wink',
				'name'  => esc_html__( 'Emoticon Wink', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-emotion-laugh',
				'name'  => esc_html__( 'Emotion Laugh', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-envelope',
				'name'  => esc_html__( 'Envelope', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-envelope-open',
				'name'  => esc_html__( 'Envelope Open', 'buddyboss-theme' ),
			),
			array(
				'group' => 'Interfaces',
				'id'    => 'bb-icon-exchange',
				'name'  => esc_html__( 'Exchange', 'buddyboss-theme' ),
			),
			array(
				'group' => 'alerts',
				'id'    => 'bb-icon-exclamation',
				'name'  => esc_html__( 'Exclamation', 'buddyboss-theme' ),
			),
			array(
				'group' => 'alerts',
				'id'    => 'bb-icon-exclamation-triangle',
				'name'  => esc_html__( 'Exclamation Triangle', 'buddyboss-theme' ),
			),
			array(
				'group' => 'Interfaces',
				'id'    => 'bb-icon-expand',
				'name'  => esc_html__( 'Expand', 'buddyboss-theme' ),
			),
			array(
				'group' => 'Interfaces',
				'id'    => 'bb-icon-external-link',
				'name'  => esc_html__( 'External Link', 'buddyboss-theme' ),
			),
			array(
				'group' => 'Interfaces',
				'id'    => 'bb-icon-eye',
				'name'  => esc_html__( 'Eye', 'buddyboss-theme' ),
			),
			array(
				'group' => 'Interfaces',
				'id'    => 'bb-icon-eye-slash',
				'name'  => esc_html__( 'Eye Slash', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-facebook',
				'name'  => esc_html__( 'Facebook', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-facebook-f',
				'name'  => esc_html__( 'Facebook F', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-intercom',
				'name'  => esc_html__( 'Brand Intercom', 'buddyboss-theme' ),
			),
			array(
				'group' => 'Interfaces',
				'id'    => 'bb-icon-fast-backward',
				'name'  => esc_html__( 'Fast Backward', 'buddyboss-theme' ),
			),
			array(
				'group' => 'Interfaces',
				'id'    => 'bb-icon-fast-forward',
				'name'  => esc_html__( 'Fast Forward', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-feather',
				'name'  => esc_html__( 'Feather', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file',
				'name'  => esc_html__( 'File', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-album',
				'name'  => esc_html__( 'File Album', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-archive',
				'name'  => esc_html__( 'File Archive', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-article',
				'name'  => esc_html__( 'File Article', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-attach',
				'name'  => esc_html__( 'File Attach', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-audio',
				'name'  => esc_html__( 'File Audio', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-bookmark',
				'name'  => esc_html__( 'File Bookmark', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-checklist',
				'name'  => esc_html__( 'File Checklist', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-cloud',
				'name'  => esc_html__( 'File Cloud', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-code',
				'name'  => esc_html__( 'File Code', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-contact',
				'name'  => esc_html__( 'File Contact', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-css',
				'name'  => esc_html__( 'File CSS', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-design',
				'name'  => esc_html__( 'File Design', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-doc',
				'name'  => esc_html__( 'File Doc', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-dollar',
				'name'  => esc_html__( 'File Dollar', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-download',
				'name'  => esc_html__( 'File Download', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-excel',
				'name'  => esc_html__( 'File Excel', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-exclamation',
				'name'  => esc_html__( 'File Exclamation', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-export',
				'name'  => esc_html__( 'File Export', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-font',
				'name'  => esc_html__( 'File Font', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-gif',
				'name'  => esc_html__( 'File GIF', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-globe',
				'name'  => esc_html__( 'File Globe', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-image',
				'name'  => esc_html__( 'File Image', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-import',
				'name'  => esc_html__( 'File Import', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-info',
				'name'  => esc_html__( 'File Info', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-list',
				'name'  => esc_html__( 'File List', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-list-numeric',
				'name'  => esc_html__( 'File List Numeric', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-minus',
				'name'  => esc_html__( 'File Minus', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-mobile',
				'name'  => esc_html__( 'File Mobile', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-pdf',
				'name'  => esc_html__( 'File PDF', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-plus',
				'name'  => esc_html__( 'File Plus', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-powerpoint',
				'name'  => esc_html__( 'File Powerpoint', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-presentation',
				'name'  => esc_html__( 'File Presentation', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-question',
				'name'  => esc_html__( 'File Question', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-rss',
				'name'  => esc_html__( 'File RSS', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-share',
				'name'  => esc_html__( 'File Share', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-signature',
				'name'  => esc_html__( 'File Signature', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-spreadsheet',
				'name'  => esc_html__( 'File Spreadsheet', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-text',
				'name'  => esc_html__( 'File Text', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-times',
				'name'  => esc_html__( 'File Times', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-upload',
				'name'  => esc_html__( 'File Upload', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-vector',
				'name'  => esc_html__( 'File Vector', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-video',
				'name'  => esc_html__( 'File Video', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-file-word',
				'name'  => esc_html__( 'File Word', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-film',
				'name'  => esc_html__( 'Film', 'buddyboss-theme' ),
			),
			array(
				'group' => 'Interfaces',
				'id'    => 'bb-icon-filter',
				'name'  => esc_html__( 'Filter', 'buddyboss-theme' ),
			),
			array(
				'group' => 'Interfaces',
				'id'    => 'bb-icon-filter-alt',
				'name'  => esc_html__( 'Filter Alt', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-firefox',
				'name'  => esc_html__( 'Firefox', 'buddyboss-theme' ),
			),
			array(
				'group' => 'Interfaces',
				'id'    => 'bb-icon-flag',
				'name'  => esc_html__( 'Flag', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-flask',
				'name'  => esc_html__( 'Flask', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-flickr',
				'name'  => esc_html__( 'Flickr', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-folder',
				'name'  => esc_html__( 'Folder', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-folder-alt',
				'name'  => esc_html__( 'Folder Alt', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-folder-alt-slash',
				'name'  => esc_html__( 'Folder Alt Slash', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-folder-download',
				'name'  => esc_html__( 'Folder Download', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-folder-move',
				'name'  => esc_html__( 'Folder Move', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-folder-open',
				'name'  => esc_html__( 'Folder Open', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-folder-plus',
				'name'  => esc_html__( 'Folder Plus', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-folder-slash',
				'name'  => esc_html__( 'Folder Slash', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-folder-upload',
				'name'  => esc_html__( 'Folder Upload', 'buddyboss-theme' ),
			),
			array(
				'group' => 'text-formatting',
				'id'    => 'bb-icon-font',
				'name'  => esc_html__( 'Font', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-forest',
				'name'  => esc_html__( 'Forest', 'buddyboss-theme' ),
			),
			array(
				'group' => 'Interfaces',
				'id'    => 'bb-icon-forward',
				'name'  => esc_html__( 'Forward', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-gamipress',
				'name'  => esc_html__( 'GamiPress', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-gem',
				'name'  => esc_html__( 'Gem', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-gif',
				'name'  => esc_html__( 'GIF', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-gift',
				'name'  => esc_html__( 'Gift', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-github',
				'name'  => esc_html__( 'GitHub', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-gitlab',
				'name'  => esc_html__( 'GitLab', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-globe',
				'name'  => esc_html__( 'Globe', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-globe-alt',
				'name'  => esc_html__( 'Globe Alt', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-globe-layers',
				'name'  => esc_html__( 'Globe Layers', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-google',
				'name'  => esc_html__( 'Google', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-google-admob',
				'name'  => esc_html__( 'Google AdMob', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-google-firebase',
				'name'  => esc_html__( 'Google Firebase', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-google-fonts',
				'name'  => esc_html__( 'Google Fonts', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-graduation-cap',
				'name'  => esc_html__( 'Graduation Cap', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-grid-large',
				'name'  => esc_html__( 'Grid Large', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-grid-small',
				'name'  => esc_html__( 'Grid Small', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-grip-h',
				'name'  => esc_html__( 'Grid H', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-grip-v',
				'name'  => esc_html__( 'Grid V', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-hashtag',
				'name'  => esc_html__( 'Hashtag', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-hand-pointer',
				'name'  => esc_html__( 'Hand Pointer', 'buddyboss-theme' ),
			),
			array(
				'group' => 'text-formatting',
				'id'    => 'bb-icon-heading',
				'name'  => esc_html__( 'Heading', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-headphones',
				'name'  => esc_html__( 'Headphones', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-heart',
				'name'  => esc_html__( 'Heart', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-home',
				'name'  => esc_html__( 'Home', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-image',
				'name'  => esc_html__( 'Image', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-image-move',
				'name'  => esc_html__( 'Image Move', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-image-plus',
				'name'  => esc_html__( 'Image Plus', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-image-slash',
				'name'  => esc_html__( 'Image Slash', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-image-video',
				'name'  => esc_html__( 'Image Video', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-image-video-slash',
				'name'  => esc_html__( 'Image Video Slash', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-images',
				'name'  => esc_html__( 'Images', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-images-slash',
				'name'  => esc_html__( 'Images Slash', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-inbox',
				'name'  => esc_html__( 'Inbox', 'buddyboss-theme' ),
			),
			array(
				'group' => 'text-formatting',
				'id'    => 'bb-icon-indent',
				'name'  => esc_html__( 'Indent', 'buddyboss-theme' ),
			),
			array(
				'group' => 'alerts',
				'id'    => 'bb-icon-info',
				'name'  => esc_html__( 'Info', 'buddyboss-theme' ),
			),
			array(
				'group' => 'alerts',
				'id'    => 'bb-icon-info-triangle',
				'name'  => esc_html__( 'Info Triangle', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-instagram',
				'name'  => esc_html__( 'Instagram', 'buddyboss-theme' ),
			),
			array(
				'group' => 'text-formatting',
				'id'    => 'bb-icon-italic',
				'name'  => esc_html__( 'Italic', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-key',
				'name'  => esc_html__( 'Key', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-key-slash',
				'name'  => esc_html__( 'Key Slash', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-keyboard',
				'name'  => esc_html__( 'Keyboard', 'buddyboss-theme' ),
			),
			array(
				'group' => 'technology',
				'id'    => 'bb-icon-laptop',
				'name'  => esc_html__( 'Laptop', 'buddyboss-theme' ),
			),
			array(
				'group' => 'technology',
				'id'    => 'bb-icon-layers',
				'name'  => esc_html__( 'Layers', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-learndash',
				'name'  => esc_html__( 'LearnDash', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-less-than',
				'name'  => esc_html__( 'Less Than', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-less-than-equal',
				'name'  => esc_html__( 'Less Than Equal', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-life-ring',
				'name'  => esc_html__( 'Life Ring', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-lifterlms',
				'name'  => esc_html__( 'LifterLMS', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-lightbulb',
				'name'  => esc_html__( 'Lightbulb', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-link',
				'name'  => esc_html__( 'Link', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-linkedin',
				'name'  => esc_html__( 'LinkedIn', 'buddyboss-theme' ),
			),
			array(
				'group' => 'text-formatting',
				'id'    => 'bb-icon-list',
				'name'  => esc_html__( 'List', 'buddyboss-theme' ),
			),
			array(
				'group' => 'text-formatting',
				'id'    => 'bb-icon-list-number',
				'name'  => esc_html__( 'List Number', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-location-arrow',
				'name'  => esc_html__( 'Location Arrow', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-lock',
				'name'  => esc_html__( 'Lock', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-lock-alt',
				'name'  => esc_html__( 'Lock Alt', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-lock-alt-open',
				'name'  => esc_html__( 'Lock Alt Open', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-lock-open',
				'name'  => esc_html__( 'Lock Open', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-map',
				'name'  => esc_html__( 'Map', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-map-marker',
				'name'  => esc_html__( 'Map Marker', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-marketplace',
				'name'  => esc_html__( 'Marketplace', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-maximize',
				'name'  => esc_html__( 'Maximize', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-medium',
				'name'  => esc_html__( 'Medium', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-meetup',
				'name'  => esc_html__( 'Meetup', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-memberpress',
				'name'  => esc_html__( 'MemberPress', 'buddyboss-theme' ),
			),
			array(
				'group' => 'shopping-money',
				'id'    => 'bb-icon-membership-card',
				'name'  => esc_html__( 'Membership Card', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-merge',
				'name'  => esc_html__( 'Merge', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-microphone',
				'name'  => esc_html__( 'Microphone', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-microphone-slash',
				'name'  => esc_html__( 'Microphone Slash', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-edge',
				'name'  => esc_html__( 'Microsoft Edge', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-minimize',
				'name'  => esc_html__( 'Minimize', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-minus',
				'name'  => esc_html__( 'Minus', 'buddyboss-theme' ),
			),
			array(
				'group' => 'technology',
				'id'    => 'bb-icon-mobile',
				'name'  => esc_html__( 'Mobile', 'buddyboss-theme' ),
			),
			array(
				'group' => 'technology',
				'id'    => 'bb-icon-mobile-slash',
				'name'  => esc_html__( 'Mobile Slash', 'buddyboss-theme' ),
			),
			array(
				'group' => 'shopping-money',
				'id'    => 'bb-icon-money',
				'name'  => esc_html__( 'Money', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-moon',
				'name'  => esc_html__( 'Moon', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-more-than',
				'name'  => esc_html__( 'More Than', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-more-than-equal',
				'name'  => esc_html__( 'More Than Equal', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-mouse-pointer',
				'name'  => esc_html__( 'Mouse Pointer', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-music',
				'name'  => esc_html__( 'Music', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-music-note',
				'name'  => esc_html__( 'Music Note', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-music-note-slash',
				'name'  => esc_html__( 'Music Note Slash', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-music-slash',
				'name'  => esc_html__( 'Music Slash', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-newspaper',
				'name'  => esc_html__( 'Newspaper', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-onesignal',
				'name'  => esc_html__( 'OneSignal', 'buddyboss-theme' ),
			),
			array(
				'group' => 'text-formatting',
				'id'    => 'bb-icon-outdent',
				'name'  => esc_html__( 'Outdent', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-oxtagon',
				'name'  => esc_html__( 'Oxtagon', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-package',
				'name'  => esc_html__( 'Package', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-paidmembershipspro',
				'name'  => esc_html__( 'Paid Memberships Pro', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-paper-plane',
				'name'  => esc_html__( 'Paper Plane', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-paperclip',
				'name'  => esc_html__( 'Paperclip', 'buddyboss-theme' ),
			),
			array(
				'group' => 'text-formatting',
				'id'    => 'bb-icon-paragraph',
				'name'  => esc_html__( 'Paragraph', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-paste',
				'name'  => esc_html__( 'Paste', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-pause',
				'name'  => esc_html__( 'Pause', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-pen',
				'name'  => esc_html__( 'Pen', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-pencil',
				'name'  => esc_html__( 'Pencil', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-percentage',
				'name'  => esc_html__( 'Percentage', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-phone',
				'name'  => esc_html__( 'Phone', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-phone-call',
				'name'  => esc_html__( 'Phone Call', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-phone-forwarded',
				'name'  => esc_html__( 'Phone Forwarded', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-phone-incoming',
				'name'  => esc_html__( 'Phone Incoming', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-phone-missed',
				'name'  => esc_html__( 'Phone Missed', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-phone-slash',
				'name'  => esc_html__( 'Phone Slash', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-picture-in-picture',
				'name'  => esc_html__( 'Picture In Picture', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-pin',
				'name'  => esc_html__( 'Pin', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-pin-star',
				'name'  => esc_html__( 'Pin Star', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-pinterest',
				'name'  => esc_html__( 'Pinterest', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-pizza-slice',
				'name'  => esc_html__( 'Pizza Slice', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-play',
				'name'  => esc_html__( 'Play', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-plug',
				'name'  => esc_html__( 'Plug', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-plus',
				'name'  => esc_html__( 'Plus', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-pocket',
				'name'  => esc_html__( 'Pocket', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-poll',
				'name'  => esc_html__( 'Poll', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-poll-h',
				'name'  => esc_html__( 'Poll Horizontal', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-power-on',
				'name'  => esc_html__( 'Power On', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-printer',
				'name'  => esc_html__( 'Printer', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-pusher',
				'name'  => esc_html__( 'Pusher', 'buddyboss-theme' ),
			),
			array(
				'group' => 'alerts',
				'id'    => 'bb-icon-question',
				'name'  => esc_html__( 'Question', 'buddyboss-theme' ),
			),
			array(
				'group' => 'alerts',
				'id'    => 'bb-icon-question-triangle',
				'name'  => esc_html__( 'Question Triangle', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-quiz',
				'name'  => esc_html__( 'Quiz', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-quora',
				'name'  => esc_html__( 'Quora', 'buddyboss-theme' ),
			),
			array(
				'group' => 'text-formatting',
				'id'    => 'bb-icon-quote-left',
				'name'  => esc_html__( 'Quote Left', 'buddyboss-theme' ),
			),
			array(
				'group' => 'text-formatting',
				'id'    => 'bb-icon-quote-right',
				'name'  => esc_html__( 'Quote Right', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-radio',
				'name'  => esc_html__( 'Radio', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-random',
				'name'  => esc_html__( 'Random', 'buddyboss-theme' ),
			),
			array(
				'group' => 'shopping-money',
				'id'    => 'bb-icon-receipt',
				'name'  => esc_html__( 'Receipt', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-reddit',
				'name'  => esc_html__( 'Reddit', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-redo',
				'name'  => esc_html__( 'Redo', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-registered',
				'name'  => esc_html__( 'Registered', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-repeat',
				'name'  => esc_html__( 'Repeat', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-reply',
				'name'  => esc_html__( 'Reply', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-reply-all',
				'name'  => esc_html__( 'Reply All', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-restrictcontentpro',
				'name'  => esc_html__( 'Restrict Content Pro', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-rocket',
				'name'  => esc_html__( 'Rocket', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-rss',
				'name'  => esc_html__( 'Rss', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-safari',
				'name'  => esc_html__( 'Safari', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-save',
				'name'  => esc_html__( 'Save', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-scissors',
				'name'  => esc_html__( 'Scissors', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-search',
				'name'  => esc_html__( 'Search', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-search-minus',
				'name'  => esc_html__( 'Search Minus', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-search-plus',
				'name'  => esc_html__( 'Search Plus', 'buddyboss-theme' ),
			),
			array(
				'group' => 'technology',
				'id'    => 'bb-icon-server',
				'name'  => esc_html__( 'Server', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-share',
				'name'  => esc_html__( 'Share', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-share-dots',
				'name'  => esc_html__( 'Share Dots', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-share-square',
				'name'  => esc_html__( 'Share Square', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-shield',
				'name'  => esc_html__( 'Shield', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-shield-half',
				'name'  => esc_html__( 'Shield Half', 'buddyboss-theme' ),
			),
			array(
				'group' => 'shopping-money',
				'id'    => 'bb-icon-shopping-bag',
				'name'  => esc_html__( 'Shopping Bag', 'buddyboss-theme' ),
			),
			array(
				'group' => 'shopping-money',
				'id'    => 'bb-icon-shopping-basket',
				'name'  => esc_html__( 'Shopping Basket', 'buddyboss-theme' ),
			),
			array(
				'group' => 'shopping-money',
				'id'    => 'bb-icon-shopping-cart',
				'name'  => esc_html__( 'Shopping Cart', 'buddyboss-theme' ),
			),
			array(
				'group' => 'shopping-money',
				'id'    => 'bb-icon-cart-slash',
				'name'  => esc_html__( 'Cart Slash', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-sidebar',
				'name'  => esc_html__( 'Sidebar', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-sign-in',
				'name'  => esc_html__( 'Sign In', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-sign-out',
				'name'  => esc_html__( 'Sign Out', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-signal-1',
				'name'  => esc_html__( 'Signal 1', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-signal-2',
				'name'  => esc_html__( 'Signal 2', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-signal-3',
				'name'  => esc_html__( 'Signal 3', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-signal-full',
				'name'  => esc_html__( 'Signal Full', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-signal-slash',
				'name'  => esc_html__( 'Signal Slash', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-skype',
				'name'  => esc_html__( 'Skype', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-slack',
				'name'  => esc_html__( 'Slack', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-sliders-h',
				'name'  => esc_html__( 'Sliders Horizontal', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-sliders-v',
				'name'  => esc_html__( 'Sliders Vertical', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-snapchat',
				'name'  => esc_html__( 'Snapchat', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-sort',
				'name'  => esc_html__( 'Sort', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-sort-alpha-down',
				'name'  => esc_html__( 'Sort Alpha Down', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-sort-alpha-up',
				'name'  => esc_html__( 'Sort Alpha Up', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-sort-amount-down',
				'name'  => esc_html__( 'Sort Amount Down', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-sort-amount-up',
				'name'  => esc_html__( 'Sort Amount Up', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-sort-down',
				'name'  => esc_html__( 'Sort Down', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-sort-numeric-down',
				'name'  => esc_html__( 'Sort Numeric Down', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-sort-numeric-up',
				'name'  => esc_html__( 'Sort Numeric Up', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-sort-up',
				'name'  => esc_html__( 'Sort Up', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-speaker',
				'name'  => esc_html__( 'Speaker', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-spinner',
				'name'  => esc_html__( 'Spinner', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-spinner-alt',
				'name'  => esc_html__( 'Spinner Alt', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-spinner-third',
				'name'  => esc_html__( 'Spinner Third', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-spotify',
				'name'  => esc_html__( 'Spotify', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-star',
				'name'  => esc_html__( 'Star', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-star-half',
				'name'  => esc_html__( 'Star Half', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-star-slash',
				'name'  => esc_html__( 'Star Slash', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-step-backward',
				'name'  => esc_html__( 'Step Backward', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-step-forward',
				'name'  => esc_html__( 'Step Forward', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-stop',
				'name'  => esc_html__( 'Stop', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-stopwatch',
				'name'  => esc_html__( 'Stopwatch', 'buddyboss-theme' ),
			),
			array(
				'group' => 'text-formatting',
				'id'    => 'bb-icon-strikethrough',
				'name'  => esc_html__( 'Strikethrough', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-split',
				'name'  => esc_html__( 'Split', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-sun',
				'name'  => esc_html__( 'Sun', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-sunrise',
				'name'  => esc_html__( 'Sunrise', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-sync',
				'name'  => esc_html__( 'Sync', 'buddyboss-theme' ),
			),
			array(
				'group' => 'technology',
				'id'    => 'bb-icon-tablet',
				'name'  => esc_html__( 'Tablet', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-tag',
				'name'  => esc_html__( 'Tag', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-tags',
				'name'  => esc_html__( 'Tags', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-telegram',
				'name'  => esc_html__( 'Telegram', 'buddyboss-theme' ),
			),
			array(
				'group' => 'technology',
				'id'    => 'bb-icon-terminal',
				'name'  => esc_html__( 'Terminal', 'buddyboss-theme' ),
			),
			array(
				'group' => 'text-formatting',
				'id'    => 'bb-icon-text',
				'name'  => esc_html__( 'Text', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-thermometer',
				'name'  => esc_html__( 'Thermometer', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-thumbs-down',
				'name'  => esc_html__( 'Thumbs Down', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-thumbs-up',
				'name'  => esc_html__( 'Thumbs Up', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-thumbtack',
				'name'  => esc_html__( 'Thumbtack', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-thumbtack-star',
				'name'  => esc_html__( 'Thumbtack Star', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-tiktok',
				'name'  => esc_html__( 'TikTok', 'buddyboss-theme' ),
			),
			array(
				'group' => 'alerts',
				'id'    => 'bb-icon-times',
				'name'  => esc_html__( 'Times', 'buddyboss-theme' ),
			),
			array(
				'group' => 'alerts',
				'id'    => 'bb-icon-times-triangle',
				'name'  => esc_html__( 'Times Triangle', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-toggle-off',
				'name'  => esc_html__( 'Toggle Off', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-toggle-on',
				'name'  => esc_html__( 'Toggle On', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-tools',
				'name'  => esc_html__( 'Tools', 'buddyboss-theme' ),
			),
			array(
				'group' => 'text-formatting',
				'id'    => 'bb-icon-trademark',
				'name'  => esc_html__( 'Trademark', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-trash',
				'name'  => esc_html__( 'Trash', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-trash-restore',
				'name'  => esc_html__( 'Trash Restore', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-trending-down',
				'name'  => esc_html__( 'Trending Down', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-trending-up',
				'name'  => esc_html__( 'Trending Up', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-trophy',
				'name'  => esc_html__( 'Trophy', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-trophy-slash',
				'name'  => esc_html__( 'Trophy Slash', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-tumblr',
				'name'  => esc_html__( 'Tumblr', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-tutorlms',
				'name'  => esc_html__( 'Tutor LMS', 'buddyboss-theme' ),
			),
			array(
				'group' => 'technology',
				'id'    => 'bb-icon-tv',
				'name'  => esc_html__( 'TV', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-twitch',
				'name'  => esc_html__( 'Twitch', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-twitter',
				'name'  => esc_html__( 'Twitter', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-umbrella',
				'name'  => esc_html__( 'Umbrella', 'buddyboss-theme' ),
			),
			array(
				'group' => 'text-formatting',
				'id'    => 'bb-icon-underline',
				'name'  => esc_html__( 'Underline', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-undo',
				'name'  => esc_html__( 'Undo', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-unlink',
				'name'  => esc_html__( 'Unlink', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-upload',
				'name'  => esc_html__( 'Upload', 'buddyboss-theme' ),
			),
			array(
				'group' => 'users-people',
				'id'    => 'bb-icon-user',
				'name'  => esc_html__( 'User', 'buddyboss-theme' ),
			),
			array(
				'group' => 'users-people',
				'id'    => 'bb-icon-user-avatar',
				'name'  => esc_html__( 'User Avatar', 'buddyboss-theme' ),
			),
			array(
				'group' => 'users-people',
				'id'    => 'bb-icon-user-arrow-down',
				'name'  => esc_html__( 'User Arrow Down', 'buddyboss-theme' ),
			),
			array(
				'group' => 'users-people',
				'id'    => 'bb-icon-user-arrow-up',
				'name'  => esc_html__( 'User Arrow Up', 'buddyboss-theme' ),
			),
			array(
				'group' => 'users-people',
				'id'    => 'bb-icon-user-crown',
				'name'  => esc_html__( 'User Crown', 'buddyboss-theme' ),
			),
			array(
				'group' => 'users-people',
				'id'    => 'bb-icon-user-badge',
				'name'  => esc_html__( 'User Badge', 'buddyboss-theme' ),
			),
			array(
				'group' => 'users-people',
				'id'    => 'bb-icon-user-cancel',
				'name'  => esc_html__( 'User Cancel', 'buddyboss-theme' ),
			),
			array(
				'group' => 'users-people',
				'id'    => 'bb-icon-user-card',
				'name'  => esc_html__( 'User Card', 'buddyboss-theme' ),
			),
			array(
				'group' => 'users-people',
				'id'    => 'bb-icon-user-check',
				'name'  => esc_html__( 'User Check', 'buddyboss-theme' ),
			),
			array(
				'group' => 'users-people',
				'id'    => 'bb-icon-user-clock',
				'name'  => esc_html__( 'User Clock', 'buddyboss-theme' ),
			),
			array(
				'group' => 'users-people',
				'id'    => 'bb-icon-user-cog',
				'name'  => esc_html__( 'User Cog', 'buddyboss-theme' ),
			),
			array(
				'group' => 'users-people',
				'id'    => 'bb-icon-user-edit',
				'name'  => esc_html__( 'User Edit', 'buddyboss-theme' ),
			),
			array(
				'group' => 'users-people',
				'id'    => 'bb-icon-user-friends',
				'name'  => esc_html__( 'User Friends', 'buddyboss-theme' ),
			),
			array(
				'group' => 'users-people',
				'id'    => 'bb-icon-user-friends-alt',
				'name'  => esc_html__( 'User Friends Alt', 'buddyboss-theme' ),
			),
			array(
				'group' => 'users-people',
				'id'    => 'bb-icon-user-friends-alt-slash',
				'name'  => esc_html__( 'User Friends Alt Slash', 'buddyboss-theme' ),
			),
			array(
				'group' => 'users-people',
				'id'    => 'bb-icon-user-friends-plus',
				'name'  => esc_html__( 'User Friends Plus', 'buddyboss-theme' ),
			),
			array(
				'group' => 'users-people',
				'id'    => 'bb-icon-user-friends-slash',
				'name'  => esc_html__( 'User Friends Slash', 'buddyboss-theme' ),
			),
			array(
				'group' => 'users-people',
				'id'    => 'bb-icon-user-info',
				'name'  => esc_html__( 'User Info', 'buddyboss-theme' ),
			),
			array(
				'group' => 'users-people',
				'id'    => 'bb-icon-user-lock',
				'name'  => esc_html__( 'User Lock', 'buddyboss-theme' ),
			),
			array(
				'group' => 'users-people',
				'id'    => 'bb-icon-user-minus',
				'name'  => esc_html__( 'User Minus', 'buddyboss-theme' ),
			),
			array(
				'group' => 'users-people',
				'id'    => 'bb-icon-user-plus',
				'name'  => esc_html__( 'User Plus', 'buddyboss-theme' ),
			),
			array(
				'group' => 'users-people',
				'id'    => 'bb-icon-user-slash',
				'name'  => esc_html__( 'User Slash', 'buddyboss-theme' ),
			),
			array(
				'group' => 'users-people',
				'id'    => 'bb-icon-user-times',
				'name'  => esc_html__( 'User Times', 'buddyboss-theme' ),
			),
			array(
				'group' => 'users-people',
				'id'    => 'bb-icon-users',
				'name'  => esc_html__( 'Users', 'buddyboss-theme' ),
			),
			array(
				'group' => 'users-people',
				'id'    => 'bb-icon-users-slash',
				'name'  => esc_html__( 'Users Slash', 'buddyboss-theme' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'bb-icon-u-turn-down',
				'name'  => esc_html__( 'U Turn Down', 'buddyboss-theme' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'bb-icon-u-turn-left',
				'name'  => esc_html__( 'U Turn Left', 'buddyboss-theme' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'bb-icon-u-turn-right',
				'name'  => esc_html__( 'U Turn Right', 'buddyboss-theme' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'bb-icon-u-turn-up',
				'name'  => esc_html__( 'U Turn Up', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-vk',
				'name'  => esc_html__( 'VK', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-video',
				'name'  => esc_html__( 'Video', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-video-plus',
				'name'  => esc_html__( 'Video Plus', 'buddyboss-theme' ),
			),
			array(
				'group' => 'media-files',
				'id'    => 'bb-icon-video-slash',
				'name'  => esc_html__( 'Video Slash', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-vimeo',
				'name'  => esc_html__( 'Vimeo', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-voicemail',
				'name'  => esc_html__( 'Voicemail', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-volume-down',
				'name'  => esc_html__( 'Volume Down', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-volume-mute',
				'name'  => esc_html__( 'Volume Mute', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-volume-off',
				'name'  => esc_html__( 'Volume Off', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-volume-slash',
				'name'  => esc_html__( 'Volume Slash', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-volume-up',
				'name'  => esc_html__( 'Volume Up', 'buddyboss-theme' ),
			),
			array(
				'group' => 'shopping-money',
				'id'    => 'bb-icon-wallet',
				'name'  => esc_html__( 'Wallet', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-watch',
				'name'  => esc_html__( 'Watch', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-whatsapp',
				'name'  => esc_html__( 'WhatsApp', 'buddyboss-theme' ),
			),
			array(
				'group' => 'accessibility',
				'id'    => 'bb-icon-wheelchair',
				'name'  => esc_html__( 'Wheelchair', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-wifi',
				'name'  => esc_html__( 'Wi-Fi', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-wifi-slash',
				'name'  => esc_html__( 'Wi-Fi Slash', 'buddyboss-theme' ),
			),
			array(
				'group' => 'objects',
				'id'    => 'bb-icon-wind',
				'name'  => esc_html__( 'Wind', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-wishlistmember',
				'name'  => esc_html__( 'WishList Member', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-woocommerce',
				'name'  => esc_html__( 'WooCommerce', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-wordpress',
				'name'  => esc_html__( 'WordPress', 'buddyboss-theme' ),
			),
			array(
				'group' => 'interfaces',
				'id'    => 'bb-icon-wrench',
				'name'  => esc_html__( 'Wrench', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-xing',
				'name'  => esc_html__( 'XING', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-youtube',
				'name'  => esc_html__( 'YouTube', 'buddyboss-theme' ),
			),
			array(
				'group' => 'brands',
				'id'    => 'bb-icon-brand-zoom',
				'name'  => esc_html__( 'Zoom', 'buddyboss-theme' ),
			),
		);

		/**
		 * Filter BuddyBoss items.
		 *
		 * @since 0.1.0
		 *
		 * @param array $items Icon names.
		 */
		$items = apply_filters( 'icon_picker_buddyboss_items', $items );

		return $items;
	}
}
