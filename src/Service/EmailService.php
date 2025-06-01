<?php

namespace App\Service;

use App\Entity\Order;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Twig\Environment;

class EmailService
{
    public function __construct(
        private MailerInterface $mailer,
        private Environment $twig,
        private string $adminEmail
    ) {}

    public function sendOrderConfirmation(Order $order): void
    {
        $email = (new Email())
            ->from($this->adminEmail)
            ->to($order->getUser()->getEmail())
            ->subject('Order Confirmation - BookNest')
            ->html(
                $this->twig->render('emails/order_confirmation.html.twig', [
                    'order' => $order,
                ])
            );

        $this->mailer->send($email);
    }

    public function sendOrderShipped(Order $order): void
    {
        $email = (new Email())
            ->from($this->adminEmail)
            ->to($order->getUser()->getEmail())
            ->subject('Your Order Has Been Shipped - BookNest')
            ->html(
                $this->twig->render('emails/order_shipped.html.twig', [
                    'order' => $order,
                ])
            );

        $this->mailer->send($email);
    }

    public function sendLowStockAlert(string $bookTitle, int $currentStock): void
    {
        $email = (new Email())
            ->from($this->adminEmail)
            ->to($this->adminEmail)
            ->subject('Low Stock Alert - BookNest')
            ->html(
                $this->twig->render('emails/low_stock_alert.html.twig', [
                    'bookTitle' => $bookTitle,
                    'currentStock' => $currentStock,
                ])
            );

        $this->mailer->send($email);
    }
} 