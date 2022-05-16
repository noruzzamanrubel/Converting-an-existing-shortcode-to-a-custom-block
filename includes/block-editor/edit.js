import { useBlockProps } from '@wordpress/block-editor';

const Edit = ({ }) => {
    const blockProps = useBlockProps();
    return (
        <div {...blockProps}>Edit test block</div>
    )
}

export default Edit