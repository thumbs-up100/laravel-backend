<?php
// +--------------------------------------------------------------------------------------------
// | When work is a pleasure, life is a joy!
// +--------------------------------------------------------------------------------------------
// | Company: LongTv | User: Jingyou Chen  |  Email:chenjingyou@long.tv  | Time:2019/12/10 17:19
// +--------------------------------------------------------------------------------------------
// | TITLE:
// +--------------------------------------------------------------------------------------------

namespace App\Common\lib;


trait Images
{
    static public function ImgToBase64($img)
    {
        $imageInfo = getimagesize($img);
        return 'data:' . $imageInfo['mime'] . ';base64,' . chunk_split(base64_encode(file_get_contents($img)));

    }

}
