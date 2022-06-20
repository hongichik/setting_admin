<?php

namespace liondev\setting_admin\Controllers;

use Illuminate\Routing\Controller;
use liondev\setting_admin\Events\LaravelInstallerFinished;
use liondev\setting_admin\Helpers\EnvironmentManager;
use liondev\setting_admin\Helpers\FinalInstallManager;
use liondev\setting_admin\Helpers\InstalledFileManager;

class FinalController extends Controller
{
    /**
     * Update installed file and display finished view.
     *
     * @param \liondev\setting_admin\Helpers\InstalledFileManager $fileManager
     * @param \liondev\setting_admin\Helpers\FinalInstallManager $finalInstall
     * @param \liondev\setting_admin\Helpers\EnvironmentManager $environment
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function finish(InstalledFileManager $fileManager, FinalInstallManager $finalInstall, EnvironmentManager $environment)
    {
        $finalMessages = $finalInstall->runFinal();
        $finalStatusMessage = $fileManager->update();
        $finalEnvFile = $environment->getEnvContent();

        event(new LaravelInstallerFinished);

        return view('vendor.installer.finished', compact('finalMessages', 'finalStatusMessage', 'finalEnvFile'));
    }
}
