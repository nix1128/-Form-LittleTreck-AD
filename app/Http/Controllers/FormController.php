<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;


class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Form::create($request->all());


// calculate VAT
        $vatCalc = $request->get('Price');
        $percentage = 20;
        $vatCalc += $vatCalc * ($percentage / 100);

        //calculate Amount * Price

        $amount = $request->get('Amount');
        $price = $request->get('Price');
        $totalCalculation = $amount * $price;

        // calculate VAT 20% to Total * Price

        $vatCalc = $totalCalculation;
        $percentage = 20;
        $vatCalc += $vatCalc * ($percentage / 100);

        // calclucalte single VAT 20% amount, added to the Price

        $diff = $totalCalculation;
        $diff -= $totalCalculation * ($percentage / 100);
        $singleVat =  $totalCalculation - $diff;




        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $section = $phpWord->addSection();
        $section->addTextBreak(1);
        $date = date('l jS ');
        $section->addText('INVOICE', ['size' => 16, 'bold' => true,], ['align' => \PhpOffice\PhpWord\Style\Cell::VALIGN_CENTER]);
        $formTableStyleName = 'Form Table';
        $formTableStyle = array('borderSize' => 6, 'borderColor' => '006699', 'cellMargin' => 50, 'alignment' => \PhpOffice\PhpWord\SimpleType\JcTable::CENTER, 'cellSpacing' => 100);
        $formTableFirstRowStyle = array('borderBottomSize' => 18, 'borderBottomColor' => '0000FF', 'bgColor' => '66BBFF');

        $formTableFontStyle = array('bold' => true);
        $phpWord->addTableStyle($formTableStyleName, $formTableStyle, $formTableFirstRowStyle);
        $table = $section->addTable($formTableStyleName);
        $table->addRow(900);
        $table->addCell(2000)->addText('Description of Services', $formTableFontStyle, ['align' => \PhpOffice\PhpWord\Style\Cell::VALIGN_CENTER]);
        $table->addCell(2000)->addText('Amount', $formTableFontStyle, ['align' => \PhpOffice\PhpWord\Style\Cell::VALIGN_CENTER]);
        $table->addCell(2000)->addText('Price', $formTableFontStyle, ['align' => \PhpOffice\PhpWord\Style\Cell::VALIGN_CENTER]);
        $table->addCell(2000)->addText('Total (amount * price)', $formTableFontStyle, ['align' => \PhpOffice\PhpWord\Style\Cell::VALIGN_CENTER]);




        $table->addRow();
        $c1 = $table->addCell(6000, [ 'colsNum' => 2,]);
        $c1->addText('Client Name: '.$request->get('client'),[],['align'=>'left']);
        $c1->addText('Matter: '.$request->get('matter'),[],['align'=>'left']);

        $c1->addText('ID:'. $request->get('Invoice_no'),[],['align'=>'right']);
        $c1->addText('From:<w:br/>'.$date, [], ['align'=>'right']);


        $d1 = $table->addCell(2000);
        $d1->addText($request->get('Amount'), [], ['align' => \PhpOffice\PhpWord\Style\Cell::VALIGN_CENTER]);




        $e1 = $table->addCell(2000);
        $e1->addText($request->get('Price'), [], ['align' => \PhpOffice\PhpWord\Style\Cell::VALIGN_CENTER]);

        $table->addCell(2000)->addText($totalCalculation, [], ['align' => \PhpOffice\PhpWord\Style\Cell::VALIGN_CENTER]);



        $phpWord->addParagraphStyle('right_align', array('align' => 'right'));

        $textright = $section->addTextRun('right_align');

        $textright->addText( '');





        $phpWord->addParagraphStyle('right_align', array('align' => 'right'));

        $textright = $section->addTextRun('right_align');

        $textright->addText( 'VAT Amount 20%: ' ,['size' => 10, 'bold' => true,]);
        $textright->addText( $singleVat );


        $phpWord->addParagraphStyle('right_align', array('align' => 'right'));

        $textright = $section->addTextRun('right_align');

        $textright->addText( 'Total Amount: ',['size' => 12, 'bold' => true,'underline' => 'single'] );
        $textright->addText( $vatCalc,['size' => 12, 'bold' => true,'underline' => 'single'] );



        $phpWord->addParagraphStyle('right_align', ['align' => 'right','underline' => 'single']);



        $textright = $section->addTextRun('right_align');
$phpWord->addParagraphStyle('pJustify', array('align' => 'right', 'spaceBefore' => 0, 'spaceAfter' => 0, 'spacing' => 0));
$section->addText('Best Regards,', 'textstyle', 'pJustify');
$section->addText($request->get('issuer'), 'textstyle', 'pJustify');







        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save('Form.docx');
        return response()->download(public_path('Form.docx'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $form = Form::find($id);
        return view('home.form')->with($form);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
