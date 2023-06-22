<?php
/**
 *
 * Post Border extension for the phpBB Forum Software package
 *
 * @copyright (c) 2023, Kailey Snay, https://www.snayhomelab.com/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace kaileymsnay\postborder\event;

/**
 * @ignore
 */
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Post Border event listener
 */
class main_listener implements EventSubscriberInterface
{
	public static function getSubscribedEvents()
	{
		return [
			'core.viewtopic_modify_post_row'	=> 'viewtopic_modify_post_row',
		];
	}

	public function viewtopic_modify_post_row($event)
	{
		$event->update_subarray('post_row', 'GROUP_COLOR', $event['user_poster_data']['author_colour']);
	}
}
