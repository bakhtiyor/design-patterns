<?php
namespace Facade;

/**
 * Фасад предоставляет единый метод загрузки видео с YouTube. Этот метод
 * скрывает всю сложность сетевого уровня PHP, API YouTube и библиотеки
 * преобразования видео (FFmpeg).
 */
class YouTubeDownloader
{
    protected $youtube;
    protected $ffmpeg;

    /**
     * Бывает удобным сделать Фасад ответственным за управление жизненным циклом
     * используемой подсистемы.
     */
    public function __construct(string $youtubeApiKey)
    {
        $this->youtube = new YouTube($youtubeApiKey);
        $this->ffmpeg = new FFMpeg();
    }

    /**
     * Фасад предоставляет простой метод загрузки видео и кодирования его в
     * целевой формат (для простоты понимания примера реальный код
     * закомментирован).
     */
    public function downloadVideo(string $url): void
    {
        echo "Fetching video metadata from youtube...\n";
        // $title = $this->youtube->fetchVideo($url)->getTitle();
        echo "Saving video file to a temporary file...\n";
        // $this->youtube->saveAs($url, "video.mpg");

        echo "Processing source video...\n";
        // $video = $this->ffmpeg->open('video.mpg');
        echo "Normalizing and resizing the video to smaller dimensions...\n";
        // $video
        //     ->filters()
        //     ->resize(new FFMpeg\Coordinate\Dimension(320, 240))
        //     ->synchronize();
        echo "Capturing preview image...\n";
        // $video
        //     ->frame(FFMpeg\Coordinate\TimeCode::fromSeconds(10))
        //     ->save($title . 'frame.jpg');
        echo "Saving video in target formats...\n";
        // $video
        //     ->save(new FFMpeg\Format\Video\X264(), $title . '.mp4')
        //     ->save(new FFMpeg\Format\Video\WMV(), $title . '.wmv')
        //     ->save(new FFMpeg\Format\Video\WebM(), $title . '.webm');
        echo "Done!\n";
    }
}