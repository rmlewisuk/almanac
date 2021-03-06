import React from 'react'

type Props = {
	value: any,
	onChange: (value) => any,
}

const Checkbox = ({ value, onChange }: Props) => (
	<input
		type="checkbox"
		value={value}
		onChange={(e) => onChange(e.target.checked)}
		checked={value}
	/>
)

export default Checkbox
