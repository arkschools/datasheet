<?php

namespace Arkschools\DataInputSheets\ColumnType;

class IntegerColumn extends AbstractColumn
{
    const INPUT_SIZE = 15;

    public function __construct()
    {
        parent::__construct(
            'DataInputSheetsBundle:extension:data_input_sheets_input_text_cell.html.twig',
            self::INTEGER
        );
    }

    public function castCellContent($content, $option = null): ?int
    {
        $content = parent::castCellContent($content, $option);

        return null !== $content ? intval($content) : null;
    }
}
