<?php

declare(strict_types=1);

namespace ib\Tests;

/**
 * Class LoopTest.
 * @author Ivan Barlog <ivan.barlog@everlution.sk>
 */
abstract class LoopTest
{
    private const THOUSAND_WORDS = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus convallis aliquam sagittis. Ut nec nibh quam. Suspendisse potenti. Praesent facilisis nisl id libero sodales tincidunt. Aenean nisi lorem, accumsan eget mauris at, placerat consequat ligula. Suspendisse maximus elit arcu, vel aliquam purus egestas quis. Sed quis egestas ipsum. Sed mollis, dui quis pellentesque elementum, ante massa consequat ante, et maximus purus nunc sed urna. Nulla facilisi. Cras lacinia orci tellus, et aliquam tortor viverra ac. Vestibulum egestas efficitur laoreet. Aenean mattis augue tellus, eu volutpat tortor feugiat nec. Maecenas eu fermentum tortor. Praesent eget quam ac sem fermentum imperdiet. Nunc venenatis nisl ac nunc tincidunt porta. Pellentesque pharetra pretium varius. Nunc vel dolor quam. Sed scelerisque lacus nibh, non mattis ante laoreet ac. Sed accumsan magna eu massa placerat, at faucibus nunc ornare. Aliquam venenatis eleifend dui, nec blandit eros tempor quis. Suspendisse quis blandit sem, eu cursus odio. Morbi vel diam ut arcu ornare mattis. Duis quis semper enim. Donec at ligula metus. Donec sed lobortis massa. Fusce sollicitudin ultricies risus ut elementum. Cras sagittis non enim tempor hendrerit. Vestibulum quis est eget augue consectetur varius eget tincidunt ligula. In diam arcu, hendrerit eget ipsum ut, tempus tempor augue. Aliquam quis mauris eu magna egestas rutrum. Donec a urna eleifend, semper magna eu, consectetur risus. Aliquam suscipit elit sapien, fringilla ornare turpis eleifend eu. Sed et justo sit amet elit vehicula rutrum ut sit amet lorem. Vestibulum sed neque congue, accumsan enim eget, ultricies augue. Sed eget massa vitae elit commodo imperdiet a vestibulum neque. Pellentesque tristique ex massa, vitae ornare mi imperdiet sit amet. Phasellus ac elementum quam. Mauris eleifend gravida libero, quis volutpat arcu dictum et. Suspendisse sagittis felis vel nibh aliquet varius. Vivamus ultrices tellus eget enim interdum laoreet elementum non enim. Nulla facilisi. Fusce at rutrum metus, nec lacinia mi. Nullam et bibendum felis. Aliquam nec interdum ante. Cras at luctus purus. Phasellus ante dui, pretium sit amet gravida in, viverra vitae erat. Nulla at mauris vel nisl aliquet volutpat. Nam tincidunt a felis porttitor ultricies. Fusce vitae arcu nibh. Praesent sollicitudin ut erat non vehicula. In at mattis metus. Praesent vitae aliquet ipsum, placerat cursus purus. Nulla facilisi. Nulla commodo tortor ut orci suscipit lobortis. Vivamus molestie purus quis metus suscipit tempus. Nam blandit eleifend felis aliquam eleifend. Nam sit amet neque risus. Donec suscipit ex ex, sed elementum lectus cursus nec. Cras interdum lacinia erat, quis tristique tellus convallis ac. Maecenas porta molestie sagittis. Nullam luctus velit mauris, sit amet blandit velit volutpat sed. Fusce at porttitor tortor, a ullamcorper tellus. Nullam a rhoncus sem. Etiam malesuada, diam sit amet volutpat dictum, dolor nisi feugiat dui, non aliquet odio dolor vel leo. Nulla ut commodo nisl. Nunc porta et est vehicula sollicitudin. Integer nec odio nunc. Vivamus maximus, nulla ut consequat mattis, dui turpis bibendum lacus, eget auctor elit mi eget quam. Cras ac elit massa. Mauris facilisis volutpat arcu a tincidunt. Nullam massa lacus, tristique at scelerisque vel, convallis et ante. Nunc rhoncus nisi arcu, a gravida est congue pharetra. Nunc sagittis vel nisl at posuere. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus at tellus massa. In at nisl non turpis pulvinar imperdiet non et tellus. Nunc bibendum nec mauris nec rhoncus. Praesent non dui semper, pulvinar arcu at, pulvinar magna. Aliquam urna lectus, mattis ac scelerisque sed, scelerisque non ex. Curabitur eget justo blandit, cursus ex a, sollicitudin lorem. Phasellus consequat, nibh a elementum tempus, est magna lacinia ipsum, vitae porttitor arcu diam ornare turpis. Praesent scelerisque sapien eu dolor porttitor, ut lacinia neque pharetra. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque tempor, augue eu dictum ultrices, libero tellus placerat purus, et malesuada eros neque sed diam. Maecenas eget sem sed libero sodales sagittis vel eu mauris. Etiam rhoncus mi ut posuere rhoncus. Phasellus tempor pellentesque dolor, non faucibus augue pulvinar quis. Maecenas ultricies, lectus ut aliquet ultrices, sapien nisi laoreet quam, facilisis ullamcorper ante libero nec massa. Pellentesque blandit consequat tellus, vel egestas ante pharetra sed. Phasellus ac dictum urna, nec auctor nunc. Nam maximus molestie malesuada. Donec ornare augue eget tincidunt placerat. Maecenas at luctus leo. Quisque ac urna quam. Etiam aliquam nibh id dui malesuada, eget interdum arcu ullamcorper. Sed iaculis metus ut justo auctor dapibus. Donec maximus arcu vel velit aliquam, a sodales nunc pellentesque. Aliquam aliquet diam id diam pellentesque fermentum. Donec imperdiet sagittis ante sit amet suscipit. Sed quis dui venenatis, viverra mauris eget, laoreet dui. Etiam et orci a nibh rutrum dictum eu non nunc. Aenean placerat maximus metus eu congue. Nam maximus posuere lectus vitae placerat. Donec in lacus vel nunc dignissim fringilla et nec justo. Aliquam eu augue eu tellus dapibus aliquet. Vivamus nec nisl cursus elit dictum accumsan. Praesent est nunc, tincidunt eget gravida a, rhoncus quis erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In luctus iaculis sagittis. Suspendisse id ullamcorper massa. Etiam et pellentesque orci. Mauris tristique facilisis turpis ac aliquet. Suspendisse sollicitudin eget lacus a pretium. Proin facilisis nisl vitae quam hendrerit aliquet. Integer eu ipsum molestie, rhoncus arcu et, mollis neque. Etiam pretium condimentum odio, vel tempus eros fringilla nec. Pellentesque auctor id urna in laoreet. In malesuada ut nibh tincidunt porta. Maecenas tempus metus libero. Praesent commodo neque sed velit euismod, et dignissim lectus pellentesque. Morbi viverra laoreet bibendum. Praesent in sollicitudin lectus, at convallis risus. Suspendisse et enim non orci consequat blandit id ac ipsum. Sed vestibulum pulvinar ipsum id tristique. Ut nisl metus, dictum et pulvinar congue, varius sed sapien. Nullam augue leo, placerat et ullamcorper eget, suscipit sit amet odio. Vestibulum vitae augue quis quam placerat convallis non nec eros. Fusce lobortis felis vel ante rutrum, sit amet fermentum ipsum consectetur. Fusce vel nisi ut neque posuere facilisis. Morbi facilisis aliquam nunc, quis molestie sem commodo molestie. Ut ut nunc odio. Vivamus efficitur ac.";

    protected $data = [];

    public function __construct()
    {
        $this->data = explode(' ', self::THOUSAND_WORDS);
    }
}
