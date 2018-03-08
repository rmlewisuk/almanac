// @flow

import React from 'react'
import type { PostTypes } from '../types'

type Props = {
	type: PostTypes,
	grow?: string,
	style?: any,
}

const ICONS = {
	'movie': 'film',
	'tv': 'tv',
	'game': 'gamepad',
	'music': 'headphones',
	'book': 'book',
	'podcast': 'podcast',
	'video': 'video',
	'text': 'file-alt',
	'comic': 'bolt',
}

const Icon = ({ type, grow, style }: Props) => (
	<span className={`almn-icon__${type}`} style={style}>
		<i className={`fas fa-${ICONS[type]}`} data-fa-transform={grow ? `grow-${grow}` : ''} />
	</span>
)

export default Icon